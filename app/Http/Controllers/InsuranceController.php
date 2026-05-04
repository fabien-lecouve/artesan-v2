<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Http\Requests\StoreInsuranceRequest;
use App\Http\Requests\UpdateInsuranceRequest;
use Illuminate\Routing\Attributes\Controllers\Authorize;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $insurances = Insurance::all();

        return view('insurances.index', ['insurances' => $insurances]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insurances.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInsuranceRequest $request)
    {
        $validated = $request->validated();

        $insurance = Insurance::create($validated);

        return redirect()->route('insurances.index')->with('success', 'Assurance ' . $insurance->name . ' a été créée');
    }

    /**
     * Show the form for editing the specified resource.
     */
    #[Authorize('update', 'insurance')]
    public function edit(Insurance $insurance)
    {
        return view('insurances.edit', ['insurance' => $insurance]);
    }

    /**
     * Update the specified resource in storage.
     */
    #[Authorize('update', 'insurance')]
    public function update(UpdateInsuranceRequest $request, Insurance $insurance)
    {
        $validated = $request->validated();

        $insurance->update($validated);

        return redirect()->route('insurances.index')->with('success', 'Assurance ' . $insurance->name . ' a été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    #[Authorize('delete', 'insurance')]
    public function destroy(Insurance $insurance)
    {
        $name = $insurance->name;

        $insurance->delete();

        return redirect()->route('insurances.index')->with('success', "Assurance $name supprimée");
    }
}
