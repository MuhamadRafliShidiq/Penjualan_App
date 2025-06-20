@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Form Tambah Penjualan</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('penjualan.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="faktur" class="form-label">No Faktur</label>
                    <input 
                        type="number" 
                        name="faktur" 
                        id="faktur" 
                        class="form-control" 
                        value="{{ old('faktur') }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="no_pelanggan" class="form-label">Nama Pelanggan</label>
                    <select name="no_pelanggan" id="no_pelanggan" class="form-select">
                        <option value="">-- Pilih Pelanggan --</option>
                        @foreach($pelanggan as $p)
                            <option value="{{ $p->no_pelanggan }}" {{ old('no_pelanggan') == $p->no_pelanggan ? 'selected' : '' }}>
                                {{ $p->nama_pelanggan }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan</label>
                    <input 
                        type="date" 
                        name="tanggal_penjualan" 
                        id="tanggal_penjualan" 
                        class="form-control" 
                        value="{{ old('tanggal_penjualan') }}"
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>

            <div class="mt-3 text-center">
                <a href="{{ route('penjualan.index') }}" class="text-decoration-none">← Kembali ke daftar penjualan</a>
            </div>
        </div>
    </div>
</div>
@endsection
