<?php
namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;

class PermohonanController extends Controller
{
    public function index()
{
    $permohonan = Permohonan::all(); // Mengambil semua permohonan
    return view('permohonan.index', compact('permohonan'));
}


    public function create()
    {
        return view('permohonan.create');
    }

    public function store(Request $request)
    {
        Permohonan::create($request->all());
        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        return view('permohonan.edit', compact('permohonan'));
    }

    public function update(Request $request, $id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $permohonan->update($request->all());
        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $permohonan->delete();
        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil dihapus.');
    }
    public function cetak()
{
    try {
        $permohonan = Permohonan::all();
        $pdf = Pdf::loadView('permohonan.permohonan-cetak', compact('permohonan'));
        return $pdf->stream('laporan-permohonan.pdf');
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }
}

public function show($id)
    {
        // Retrieve the specific resource (e.g., model or data) based on the id
        $permohonan = Permohonan::findOrFail($id);
        
        // Return a view with the data
        return view('permohonan.show', compact('permohonan'));
    }

}
