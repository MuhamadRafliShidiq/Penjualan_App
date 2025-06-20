@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Form Tambah Pelanggan</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('pelanggan.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="no_pelanggan" class="form-label">No Pelanggan</label>
                    <input 
                        type="number" 
                        name="no_pelanggan" 
                        id="no_pelanggan" 
                        class="form-control" 
                        value="{{ old('no_pelanggan') }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                    <input 
                        type="text" 
                        name="nama_pelanggan" 
                        id="nama_pelanggan" 
                        class="form-control" 
                        value="{{ old('nama_pelanggan') }}"
                    >
                </div>

                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input 
                        type="text" 
                        name="alamat" 
                        id="alamat" 
                        class="form-control" 
                        value="{{ old('alamat') }}"
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>

            <div class="mt-3 text-center">
                <a href="{{ route('pelanggan.index') }}" class="text-decoration-none">← Kembali ke daftar pelanggan</a>
            </div>
        </div>
    </div>
</div>
@endsection
