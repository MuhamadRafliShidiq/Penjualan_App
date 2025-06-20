@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Form Tambah Barang</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('barang.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="kd_barang" class="form-label">Kode Barang</label>
                    <input 
                        type="number" 
                        class="form-control" 
                        id="kd_barang" 
                        name="kd_barang" 
                        value="{{ old('kd_barang') }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="nama_barang" 
                        name="nama_barang" 
                        value="{{ old('nama_barang') }}"
                    >
                </div>

                <div class="mb-4">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="harga_barang" 
                        name="harga_barang" 
                        value="{{ old('harga_barang') }}"
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>

            <div class="mt-3 text-center">
                <a href="{{ route('barang.index') }}" class="text-decoration-none">← Kembali ke daftar barang</a>
            </div>
        </div>
    </div>
</div>
@endsection
