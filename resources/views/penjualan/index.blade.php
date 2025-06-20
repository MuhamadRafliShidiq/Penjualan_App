@extends('layouts.app')

@section('content')
    <h2>Daftar Penjualan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('penjualan.create') }}" class="btn btn-primary mb-3">Tambah Penjualan</a>
    <a href="{{ route('penjualan.pdf') }}" class="btn btn-danger mb-3" target="_blank">
        Cetak PDF
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Faktur</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $penjualan)
                <tr>
                    <td>{{ $penjualan->faktur }}</td>
                    <td>{{ $penjualan->pelanggan->nama_pelanggan ?? '-' }}</td>
                    <td>{{ \Carbon\Carbon::parse($penjualan->tanggal_penjualan)->translatedFormat('d F Y') }}</td>
                    <td>
                        <div class="btn-group gap-2" role="group">
                            <a href="{{ route('penjualan.edit', $penjualan->faktur) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('penjualan.destroy', $penjualan->faktur) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection