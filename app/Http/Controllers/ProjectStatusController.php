<?php

namespace App\Http\Controllers;

use App\Models\ProjectStatus;
use App\Http\Requests\StoreProjectStatusRequest;
use App\Http\Requests\UpdateProjectStatusRequest;

class ProjectStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectStatuses = ProjectStatus::all();

        return view('projectStatuses.index', ['projectStatuses' => $projectStatuses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projectStatuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectStatusRequest $request)
    {
        $validated = $request->validated();
        $projectStatus = ProjectStatus::create($validated);

        return redirect()->route('projectStatuses.index')->with('success', "Statut du projet $projectStatus->label créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectStatus $projectStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectStatus $projectStatus)
    {
        return view('projectStatuses.edit', ['projectStatus' => $projectStatus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectStatusRequest $request, ProjectStatus $projectStatus)
    {
        $validated = $request->validated();
        $projectStatus->update($validated);

        return redirect()->route('projectStatuses.index')->with('success', "Statut du projet $projectStatus->label modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectStatus $projectStatus)
    {
        $label = $projectStatus->label;
        $projectStatus->delete();

        return redirect()->route('projectStatuses.index')->with('success', "Statut du projet $label supprimé");
    }
}
