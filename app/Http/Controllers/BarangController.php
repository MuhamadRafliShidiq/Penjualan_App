<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BarangController extends Controller
{
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }
    public function index(Request $request)
    {
        $query = Barang::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('nama_barang', 'like', '%' . $request->search . '%');
        }

        $data = $query->get();
        return view('barang.index', compact('data'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_barang' => 'required|unique:barang,kd_barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil disimpan!');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Barang::destroy($id);
        return back()->with('success', 'Data barang berhasil dihapus!');
    }

    // Method untuk export data barang ke PDF
  public function cetakPdf()
{
    $data = Barang::all(); // ambil data barang
    $pdf = Pdf::loadView('barang.pdf', compact('data')); // kirim ke view
    return $pdf->download('daftar-barang.pdf'); // atau ->stream() jika ingin langsung tampil
}



}
