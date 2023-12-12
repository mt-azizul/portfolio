<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEducationRequest;
use App\Http\Requests\UpdateEducationRequest;
use App\Models\Education;
use App\Models\User;

class EducationController extends Controller
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
        $data['page_title'] = 'Education Information Add';
        $data['model'] = "Education";
        $user = User::findOrFail($_REQUEST['user_id']??null);
        $data['user'] = $user;
        return view('admin.educations.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEducationRequest $request)
    {
        Education::create($request->all());
        return redirect()->route('users.index')->with('success', 'Education Data Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {

        return view('admin.educations.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEducationRequest $request, Education $education)
    {
        $education->update($request->all());
        return redirect()->back()->with('success', 'Education Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        //
    }
}
