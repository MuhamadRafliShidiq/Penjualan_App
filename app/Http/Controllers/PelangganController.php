<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $query = Pelanggan::query();

        if ($request->has('search')) {
            $query->where('nama_pelanggan', 'like', '%' . $request->search . '%');
        }

        $data = $query->get();
        return view('pelanggan.index', compact('data'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pelanggan' => 'required|unique:pelanggan,no_pelanggan',
            'nama_pelanggan' => 'required',
            'alamat' => 'required'
        ]);

        Pelanggan::create($request->all());
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil disimpan!');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required'
        ]);

        Pelanggan::findOrFail($id)->update($request->all());
        return redirect()->route('pelanggan.index')->with('success', 'Data pelanggan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Pelanggan::destroy($id);
        return back()->with('success', 'Data pelanggan berhasil dihapus!');
    }
}