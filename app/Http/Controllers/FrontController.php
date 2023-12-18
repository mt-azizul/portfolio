<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request  $request)
    {
        $data[] = null;
        $data['page_title'] = 'Employee';
        $data['users'] = User::latest()
            ->when($request->search, function ($query) use ($request) {
                $query->where('username', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%')
                    ->orWhere('first_name', 'like', '%' . $request->search . '%')
                    ->orWhere('last_name', 'like', '%' . $request->search . '%');
            })
            ->paginate(10);
        return view('welcome', $data);
    }
}
