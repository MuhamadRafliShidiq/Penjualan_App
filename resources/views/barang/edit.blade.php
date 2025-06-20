@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Edit Barang</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('barang.update', $barang->kd_barang) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input 
                        type="text" 
                        name="nama_barang" 
                        id="nama_barang" 
                        class="form-control" 
                        value="{{ old('nama_barang', $barang->nama_barang) }}"
                    >
                </div>

                <div class="mb-4">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input 
                        type="text" 
                        name="harga_barang" 
                        id="harga_barang" 
                        class="form-control" 
                        value="{{ old('harga_barang', $barang->harga_barang) }}"
                    >
                </div>

                <button type="submit" class="btn btn-success w-100">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
