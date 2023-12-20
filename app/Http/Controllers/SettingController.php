<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data[] = null;
        $data['settings'] = Setting::all();
        $data['page_title'] = 'Settings';
        $data['model'] = 'Settings';
        return view('admin.settings.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        $data[] = null;
        $data['settings'] = Setting::all();
        $data['page_title'] = 'Settings Update';
        $data['model'] = 'Settings';
        return view('admin.settings.edit', $data);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'author' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
        ]);
        $settings = [
            [
                'id' => 1, 
                'key' => 'name',
                'value' => $request->name,
            ],
            [
                'id'=>2,
                'key' => 'title',
                'value' => $request->title,
            ],
            [
                'id'=>3,
                'key' => 'author',
                'value' => $request->author,
            ],
            [
                'id'=>4,
                'key' => 'address',
                'value' => $request->address,
            ],
            [
                'id'=>5,
                'key' => 'email',
                'value' => $request->email,
            ],
            [
                'id'=>6,
                'key' => 'phone',
                'value' => $request->phone,
            ],
            [
                'id'=>7,
                'key' => 'facebook',
                'value' => $request->facebook,
            ],
            [
                'id'=>8,
                'key' => 'twitter',
                'value' => $request->twitter,
            ],
            [
                'id'=>9,
                'key' => 'instagram',
                'value' => $request->instagram,
            ],
            [
                'id'=>10,
                'key' => 'linkedin',
                'value' => $request->linkedin,
            ],

        ];

        foreach ($settings as $setting) {
            Setting::where('id', $setting['id'])->update(['value' => $setting['value']]);
        }

        if ($request->hasFile('logo')) {
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = 'logo.png';
            $imagePath = public_path('images/' . $imageName);
            File::delete($imagePath);
            $request->logo->move(public_path('images'), $imageName);
        }
        if ($request->hasFile('favicon')) {
            $request->validate([
                'favicon' => 'required|file|mimes:jpeg,png,jpg,gif,ico,svg|max:2048',
            ]);
            $imageName = 'favicon.ico';
            $imagePath = public_path('images/' . $imageName);
            File::delete($imagePath);
            $request->favicon->move(public_path('images'), $imageName);
        }

        return to_route('settings.index')->with('success', 'Settings Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
