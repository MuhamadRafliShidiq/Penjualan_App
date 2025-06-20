@extends('layouts.app')

@section('content')
    <h2 class="mb-3">Daftar Barang</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
    <a href="{{ route('barang.pdf') }}" class="btn btn-outline-secondary mb-3" target="_blank">Cetak PDF</a>

    <form method="GET" action="{{ route('barang.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari barang..." value="{{ request('search') }}">
            <button class="btn btn-secondary">Cari</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $barang)
                <tr>
                    <td>{{ $barang->kd_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>Rp {{ number_format($barang->harga_barang, 0, ',', '.') }}</td>
                    <td>
                        <div class="btn-group gap-2" role="group">
                            <a href="{{ route('barang.edit', $barang->kd_barang) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('barang.destroy', $barang->kd_barang) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection