<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddRequest;
use App\Models\User;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $data[] = null;
        $data['page_title'] = 'Users';
        $users = User::latest()->paginate(10);
        $data['users'] = $users;

        return view('admin.users.index', $data);
    }

    public function create()
    {
        $data[] = null;
        $data['page_title'] = 'User Create';

        return view('admin.users.create', $data);
    }

    public function store(UserAddRequest $request)
    {

        if (! $request->has('password')) {
            $request->merge(['password' => '123456']);
        }
        $user = User::create($request->except('profic'));
        if ($request->hasFile('profic')) {
            $imageName = $request->username.'.'.$request->profic->getClientOriginalExtension();
            $path = $request->profic->storePubliclyAs('users', $imageName, 'public');
            $url = Storage::url($path);
            $user->profic = $url;
            $user->save();
        }

        return redirect()->route('users.index')->with('success', 'User Created Successfully');

    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return $this->responseSuccess($user, 'User Fetched Successfully');
        } else {
            return $this->responseError('failed', 'User Not Found');
        }
    }

    public function edit(User $user)
    {
        $data[] = null;
        $data['page_title'] = 'User Edit';
        $data['user'] = $user;
        return view('admin.users.create', $data);
    }

    public function update(UserAddRequest $request, User $user)
    {
        $user->update($request->except('profic'));
        if ($request->hasFile('profic')) {
            Storage::delete($user->profic);
            $imageName = $request->username . '.' . $request->profic->getClientOriginalExtension();
            $path = $request->profic->storePubliclyAs('users', $imageName, 'public');
            $url = Storage::url($path);
            $user->profic = $url;
            $user->save();
        }
        return redirect()->route('users.index')->with('success', 'User Updated Successfully');


    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User Deleted Successfully');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ]);
        if ($validator->fails()) {
            return $this->responseError($validator->errors(), 'Data Validation Error');
        }
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if ($user) {
            return $this->responseSuccess($user, 'User Created Successfully ');
        } else {
            return $this->responseError('failed', 'User Registration failed');
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',

        ]);
        if ($validator->fails()) {
            return $this->responseError($validator->errors(), 'Data Validation Error');
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken('authToken');
            $data = [
                'user' => $user,
                'access_token' => $token->accessToken,
                'token_type' => 'Bearer',
            ];

            return $this->responseSuccess($data, 'Login Successfully');
        } else {
            return $this->responseError('Data Not Found', 'Data Not matched');
        }
    }

    public function user_details()
    {
        //update
        try {
            return $this->responseSuccess(User::all(), 'User Fetched Successfully');
        } catch (Exception $e) {
            return $this->responseError([], $e->getMessage());
        }
    }
}
