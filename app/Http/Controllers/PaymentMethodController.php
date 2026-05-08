<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Http\Requests\StorePaymentMethodRequest;
use App\Http\Requests\UpdatePaymentMethodRequest;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymentMethods = PaymentMethod::all();

        return view('payment_methods.index', ['paymentMethods' => $paymentMethods]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('payment_methods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentMethodRequest $request)
    {
        $validated = $request->validated();
        $paymentMethod = PaymentMethod::create($validated);

        return redirect()->route('payment-methods.index')->with('success', "Méthode de paiement $paymentMethod->label créée");
    }

    /**
     * Display the specified resource.
     */
    public function show(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaymentMethod $paymentMethod)
    {
        return view('payment_methods.edit', ['paymentMethod' => $paymentMethod]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentMethodRequest $request, PaymentMethod $paymentMethod)
    {
        $validated = $request->validated();
        $paymentMethod->update($validated);

        return redirect()->route('payment-methods.index')->with('success', "Méthode de paiement $paymentMethod->label modifiée");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaymentMethod $paymentMethod)
    {
        $label = $paymentMethod->label;
        $paymentMethod->delete();

        return redirect()->route('payment-methods.index')->with('success', "Méthode de paiement $label supprimée");
    }
}
