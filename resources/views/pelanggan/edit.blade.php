@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Edit Pelanggan</h2>

            <form action="{{ route('pelanggan.update', $pelanggan->no_pelanggan) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                    <input 
                        type="text" 
                        name="nama_pelanggan" 
                        id="nama_pelanggan" 
                        class="form-control" 
                        value="{{ old('nama_pelanggan', $pelanggan->nama_pelanggan) }}"
                    >
                </div>

                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input 
                        type="text" 
                        name="alamat" 
                        id="alamat" 
                        class="form-control" 
                        value="{{ old('alamat', $pelanggan->alamat) }}"
                    >
                </div>

                <button type="submit" class="btn btn-success w-100">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
