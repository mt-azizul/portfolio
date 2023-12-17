<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;
use App\Models\Certification;
use App\Models\User;

class CertificationController extends Controller
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
        $data['page_title'] = 'Certification Information Add';
        $data['model'] = 'Certifications';
        $user = User::findOrFail($_REQUEST['user_id'] ?? null);
        $data['user'] = $user;

        return view('admin.certifications.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCertificationRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        $data = [];
        foreach ($request->name as $key => $name) {
            $data = [
                'name' => $name,
                'issued_date' => $request->issued_date[$key],
            ];
            $user->certifications()->create($data);
        }

        return redirect()->route('users.show', $user->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certification $certification)
    {
        $data['page_title'] = 'Certification Information Update';
        $data['model'] = 'Certifications';
        $data['certification'] = $certification;

        return view('admin.certifications.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificationRequest $request, Certification $certification)
    {
        $certification->update($request->all());

        return redirect()->route('users.show', $certification->user_id)->with('success', 'Certification Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certification $certification)
    {
        $certification->delete();

        return redirect()->back()->with('success', 'Certification deleted successfully');
    }
}
