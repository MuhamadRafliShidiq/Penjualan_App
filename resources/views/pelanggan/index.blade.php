@extends('layouts.app')

@section('content')
    <h2>Daftar Pelanggan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
    <form method="GET" action="{{ route('pelanggan.index') }}" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari pelanggan..." value="{{ request('search') }}">
            <button class="btn btn-secondary">Cari</button>
        </div>
    </form>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $pelanggan)
                <tr>
                    <td>{{ $pelanggan->no_pelanggan }}</td>
                    <td>{{ $pelanggan->nama_pelanggan }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>
                        <div class="btn-group gap-2" role="group">
                        <a href="{{ route('pelanggan.edit', $pelanggan->no_pelanggan) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pelanggan.destroy', $pelanggan->no_pelanggan) }}" method="POST">
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