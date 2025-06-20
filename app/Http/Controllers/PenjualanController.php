<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pelanggan;
 use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(Request $request)
    {
        $query = Penjualan::with('pelanggan');

        if ($request->has('search')) {
            $query->whereHas('pelanggan', function($q) use ($request) {
                $q->where('nama_pelanggan', 'like', '%' . $request->search . '%');
            });
        }

        $data = $query->get();
        return view('penjualan.index', compact('data'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('penjualan.create', compact('pelanggan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'faktur' => 'required|unique:penjualan,faktur',
            'no_pelanggan' => 'required',
            'tanggal_penjualan' => 'required',
        ]);

        Penjualan::create($request->all());
        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil disimpan!');
    }

    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $pelanggan = Pelanggan::all();
        return view('penjualan.edit', compact('penjualan', 'pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_pelanggan' => 'required',
            'tanggal_penjualan' => 'required',
        ]);

        Penjualan::findOrFail($id)->update($request->all());
        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Penjualan::destroy($id);
        return back()->with('success', 'Data penjualan berhasil dihapus!');
    }

   
public function show($id)
    {
        $penjualan = Penjualan ::findOrFail($id);
        return view('penjualan.show', compact('penjualan'));
    }
public function cetakPdf()
{
    $penjualan = Penjualan::with('pelanggan')->get(); // pastikan relasi 'pelanggan' ada

    $pdf = Pdf::loadView('penjualan.pdf', compact('penjualan'));
    return $pdf->download('data-penjualan.pdf');
}

}