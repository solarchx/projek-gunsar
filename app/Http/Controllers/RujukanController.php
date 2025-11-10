<?php

namespace App\Http\Controllers;

use App\Models\Rujukan;
use Illuminate\Http\Request;
use App\Services\PdfService;

class RujukanController extends Controller
{
    protected $pdfService;

    public function __construct(PdfService $pdfService)
    {
        $this->pdfService = $pdfService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rujukans = Rujukan::latest()->paginate(10);
        return view('rujukan.index', compact('rujukans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rujukan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(Rujukan::rules());
        Rujukan::create($validated);

        return redirect()->route('rujukan.index')->with('success', 'Rujukan berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rujukan $rujukan)
    {
        return view('rujukan.show', compact('rujukan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rujukan $rujukan)
    {
        return view('rujukan.edit', compact('rujukan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rujukan $rujukan)
    {
        $validated = $request->validate(Rujukan::rules($rujukan->id));
        $rujukan->update($validated);

        return redirect()->route('rujukan.index')->with('success', 'Rujukan berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rujukan $rujukan)
    {
        $rujukan->delete();

        return redirect()->route('rujukan.index')->with('success', 'Rujukan berhasil dihapus.');
    }

    /**
     * Download the specified resource as a PDF.
     */
    public function downloadPdf(Rujukan $rujukan)
    {
        $pdf = $this->pdfService->generatePdf($rujukan);
        return response()->stream(
            function () use ($pdf) {
                echo $pdf->output();
            },
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $rujukan->id . '-rujukan.pdf"'
            ]
        );
    }
}