<?php

namespace App\Http\Controllers;

use App\Models\ProjectType;
use App\Http\Requests\StoreProjectTypeRequest;
use App\Http\Requests\UpdateProjectTypeRequest;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectTypes = ProjectType::all();

        return view('project_types.index', ['projectTypes' => $projectTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectTypeRequest $request)
    {
        $validated = $request->validated();
        $projectType = ProjectType::create($validated);

        return redirect()->route('project-types.index')->with('success', "Type de projet $projectType->label créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectType $projectType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectType $projectType)
    {
        return view('project_types.edit', ['projectType' => $projectType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectTypeRequest $request, ProjectType $projectType)
    {
        $validated = $request->validated();
        $projectType->update($validated);

        return redirect()->route('project-types.index')->with('success', "Type de projet $projectType->label modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectType $projectType)
    {
        $label = $projectType->label;
        $projectType->delete();

        return redirect()->route('project-types.index')->with('success', "Type de projet $label supprimé");
    }
}
