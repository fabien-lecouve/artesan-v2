<?php

namespace App\Http\Controllers;

use App\Models\EstimateStatus;
use App\Http\Requests\StoreEstimateStatusRequest;
use App\Http\Requests\UpdateEstimateStatusRequest;

class EstimateStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estimateStatuses = EstimateStatus::all();

        return view('estimateStatuses.index', ['estimateStatuses' => $estimateStatuses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estimateStatuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEstimateStatusRequest $request)
    {
        $validated = $request->validated();
        $estimateStatus = EstimateStatus::create($validated);

        return redirect()->route('estimateStatuses.index')->with('success', "Statut du devis $estimateStatus->label créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(EstimateStatus $estimateStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EstimateStatus $estimateStatus)
    {
        return view('estimateStatuses.edit', ['estimateStatus' => $estimateStatus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEstimateStatusRequest $request, EstimateStatus $estimateStatus)
    {
        $validated = $request->validated();
        $estimateStatus->update($validated);

        return redirect()->route('estimateStatuses.index')->with('success', "Statut du devis $estimateStatus->label modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EstimateStatus $estimateStatus)
    {
        $label = $estimateStatus->label;
        $estimateStatus->delete();

        return redirect()->route('estimateStatuses.index')->with('success', "Statut du devis $label supprimé");
    }
}
