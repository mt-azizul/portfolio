<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
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
        $data['page_title'] = 'Project Information Add';
        $data['model'] = 'Projects';
        $user = User::findOrFail($_REQUEST['user_id'] ?? null);
        $data['user'] = $user;

        return view('admin.projects.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $user = User::findOrFail($request->user_id);
        $data = [];
        foreach ($request->title as $key => $title) {
            $data = [
                'title' => $title,
                'description' => $request->description[$key],
                'live_link' => $request->live_link[$key],
                'repo_link' => $request->repo_link[$key],
                'started_at' => $request->started_at[$key],
                'end_at' => $request->end_at[$key],
            ];
            $user->projects()->create($data);

        }

        return redirect()->route('users.show', $user->id)->with('success', 'Project Add successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $data['page_title'] = 'Project Information Update';
        $data['model'] = 'Projects';
        $data['project'] = $project;

        return view('admin.projects.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->all());

        return redirect()->route('users.show', $project->user_id)->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->back()->with('success', 'Project Data Deleted Successfully');
    }
}
