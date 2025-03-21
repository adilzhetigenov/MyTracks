<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectFormRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('projects.list', [
            "projects" => $projects,
        ]); //.blade.php
    }
    public function create() {
        return view('projects.create'); //.blade.php
    }
    public function store(ProjectFormRequest $request) {
        // $validatedData = $request->validate([
        //     "name" => "required",
        //     "description" => "nullable",
        //     "image_url" => "nullable|url",
        // ]);
        // dd($validatedData);
        Project::create($request->validated());
        return redirect("/projects");
    }
    public function show(Project $project) {
        // $project = Project::findOrFail($id);
        return view('projects.details', [
            "project" => $project,
        ]); //.blade.php
    }
    public function edit(Project $project) {
        // $project = Project::findOrFail($id);
        return view('projects.edit', [
            "project" => $project,
        ]); //.blade.php
    }
    public function update(ProjectFormRequest $request, Project $project) {
        // $project = Project::findOrFail($id);
        // $validatedData = $request->validate([
        //     "name" => "required",
        //     "description" => "nullable",
        //     "image_url" => "nullable|url",
        // ]);
        // dd($validatedData);
        $project->update($request->validated());
        return redirect()->route("projects.show", [
            "project" => $project->id
        ]);
    }
    public function destroy(Project $project) {
        // $project = Project::findOrFail($id);
        $project->delete();
        return redirect("/projects");
    }
}
