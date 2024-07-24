@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->kodeBarang) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="namaBarang">Nama Barang</label>
            <input type="text" class="form-control" id="namaBarang" name="namaBarang" value="{{ $barang->namaBarang }}" required>
        </div>
        <div class="form-group">
            <label for="satuan">Satuan</label>
            <select class="form-control" id="satuan" name="satuan" required>
                <option value="satuan" {{ $barang->satuan == 'satuan' ? 'selected' : '' }}>Satuan</option>
                <option value="dus" {{ $barang->satuan == 'dus' ? 'selected' : '' }}>Dus</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenisBarang">Jenis Barang</label>
            <select class="form-control" id="jenisBarang" name="jenisBarang" required>
                <option value="makanan" {{ $barang->jenisBarang == 'makanan' ? 'selected' : '' }}>Makanan</option>
                <option value="minuman" {{ $barang->jenisBarang == 'minuman' ? 'selected' : '' }}>Minuman</option>
                <option value="pendidikan" {{ $barang->jenisBarang == 'pendidikan' ? 'selected' : '' }}>Pendidikan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hargaBeli">Harga Beli</label>
            <input type="number" class="form-control" id="hargaBeli" name="hargaBeli" value="{{ $barang->hargaBeli }}" required>
        </div>
        <div class="form-group">
            <label for="hargaJual">Harga Jual</label>
            <input type="number" class="form-control" id="hargaJual" name="hargaJual" value="{{ $barang->hargaJual }}" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
