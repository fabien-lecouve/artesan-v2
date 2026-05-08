<?php

namespace App\Http\Controllers;

use App\Models\InvoiceType;
use App\Http\Requests\StoreInvoiceTypeRequest;
use App\Http\Requests\UpdateInvoiceTypeRequest;

class InvoiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoiceTypes = InvoiceType::all();

        return view('invoice_types.index', ['invoiceTypes' => $invoiceTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoice_types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceTypeRequest $request)
    {
        $validated = $request->validated();
        $invoiceType = InvoiceType::create($validated);

        return redirect()->route('invoice-types.index')->with('success', "Type de facture $invoiceType->label créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(InvoiceType $invoiceType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvoiceType $invoiceType)
    {
        return view('invoice_types.edit', ['invoiceType' => $invoiceType]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceTypeRequest $request, InvoiceType $invoiceType)
    {
        $validated = $request->validated();
        $invoiceType->update($validated);

        return redirect()->route('invoice-types.index')->with('success', "Type de facture $invoiceType->label modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvoiceType $invoiceType)
    {
        $label = $invoiceType->label;
        $invoiceType->delete();

        return redirect()->route('invoice-types.index')->with('success', "Type de facture $label supprimé");
    }
}
