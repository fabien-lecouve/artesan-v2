<?php

namespace App\Http\Controllers;

use App\Models\VatRate;
use App\Http\Requests\StoreVatRateRequest;
use App\Http\Requests\UpdateVatRateRequest;

class VatRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vatRates = VatRate::all();

        return view('vat_rates.index', ['vatRates' => $vatRates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vat_rates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVatRateRequest $request)
    {
        $validated = $request->validated();
        $vatRate = VatRate::create($validated);

        return redirect()->route('vat-rates.index')->with('success', "Taux de TVA $vatRate->label créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(VatRate $vatRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VatRate $vatRate)
    {
        return view('vat_rates.edit', ['vatRate' => $vatRate]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVatRateRequest $request, VatRate $vatRate)
    {
        $validated = $request->validated();
        $vatRate->update($validated);

        return redirect()->route('vat-rates.index')->with('success', "Taux de TVA $vatRate->label modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VatRate $vatRate)
    {
        $label = $vatRate->label;
        $vatRate->delete();

        return redirect()->route('vat-rates.index')->with('success', "Taux de TVA $label supprimé");
    }
}
