<?php

namespace App\Http\Controllers;

use App\Models\InvoiceStatus;
use App\Http\Requests\StoreInvoiceStatusRequest;
use App\Http\Requests\UpdateInvoiceStatusRequest;

class InvoiceStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoiceStatuses = InvoiceStatus::all();

        return view('invoice_statuses.index', ['invoiceStatuses' => $invoiceStatuses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoice_statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceStatusRequest $request)
    {
        $validated = $request->validated();
        $invoiceStatus = InvoiceStatus::create($validated);

        return redirect()->route('invoice-statuses.index')->with('success', "Statut de facture $invoiceStatus->label créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(InvoiceStatus $invoiceStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvoiceStatus $invoiceStatus)
    {
        return view('invoice_statuses.edit', ['invoiceStatus' => $invoiceStatus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceStatusRequest $request, InvoiceStatus $invoiceStatus)
    {
        $validated = $request->validated();
        $invoiceStatus->update($validated);

        return redirect()->route('invoice-statuses.index')->with('success', "Statut de facture $invoiceStatus->label modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvoiceStatus $invoiceStatus)
    {
        $label = $invoiceStatus->label;
        $invoiceStatus->delete();

        return redirect()->route('invoice-statuses.index')->with('success', "Statut de facture $label supprimé");
    }
}
