<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSocialMediaRequest;
use App\Http\Requests\UpdateSocialMediaRequest;
use App\Models\SocialMedia;
use App\Models\User;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['page_title'] = 'Social Media Link Add';
        $data['model'] = 'Social Media';
        $user = User::findOrFail($_REQUEST['user_id'] ?? null);
        $data['user'] = $user;

        return view('admin.socialmedia.create', $data); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSocialMediaRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        $data = [];
        foreach ($request->name as $key => $name) {
            $data = [
                'name' => $name,
                'link' => $request->link[$key],
            ];
            $user->socialMedia()->create($data);
        }

        return redirect()->route('users.show', $user->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialMedia $social)
    {
        $data['page_title'] = 'SocialMedia Information Update';
        $data['model'] = 'SocialMedia';
        $data['socialMedia'] = $social;

        return view('admin.socialmedia.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocialMediaRequest $request, SocialMedia $social)
    {
        $social->update($request->all());

        return redirect()->route('users.show', $social->user_id)->with('success', 'SocialMedia Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialMedia $social)
    {
        $social->delete();

        return redirect()->back()->with('success', 'SocialMedia Data Deleted Successfully');
    }
}
