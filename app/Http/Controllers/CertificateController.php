<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Http\Requests\StoreCertificateRequest;
use App\Http\Requests\UpdateCertificateRequest;
use Illuminate\Routing\Attributes\Controllers\Authorize;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    #[Authorize('viewAny', Certificate::class)]
    public function index()
    {
        $certificates = Certificate::all();

        return view('certificates.index', ['certificates' => $certificates]);
    }

    /**
     * Show the form for creating a new resource.
     */
    #[Authorize('create', Certificate::class)]
    public function create()
    {
        return view('certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    #[Authorize('create', Certificate::class)]
    public function store(StoreCertificateRequest $request)
    {
        $validated = $request->validated();
        $certificate = Certificate::create($validated);

        return redirect()->route('certificates.index')->with('success', "Certificat $certificate->label créé");
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    #[Authorize('update', 'certificate')]
    public function edit(Certificate $certificate)
    {
        return view('certificates.edit', ['certificate' => $certificate]);
    }

    /**
     * Update the specified resource in storage.
     */
    #[Authorize('update', 'certificate')]
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {
        $validated = $request->validated();
        $certificate->update($validated);

        return redirect()->route('certificates.index')->with('success', "Certificat $certificate->label modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    #[Authorize('delete', 'certificate')]
    public function destroy(Certificate $certificate)
    {
        $label = $certificate->label;
        $certificate->delete();

        return redirect()->route('certificates.index')->with('success', "Certificat $label supprimé");
    }
}
