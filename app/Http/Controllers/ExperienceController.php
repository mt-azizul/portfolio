<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Http\Requests\StoreExperienceRequest;
use App\Http\Requests\UpdateExperienceRequest;
use App\Models\User;

class ExperienceController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExperienceRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        $data = [];
        foreach ($request->title as $key => $title) {
            $data = [
                'title' => $title,
                'description' => $request->description[$key],
                'company' => $request->company[$key],
                'location' => $request->location[$key],
                'started_at' => $request->started_at[$key],
                'end_at' => $request->end_at[$key],
            ];
            $user->experiences()->create($data);
        }

        return redirect()->route('users.show', $user->id)->with('success', 'Project Add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
