@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="namaBarang">Nama Barang</label>
            <input type="text" class="form-control" id="namaBarang" name="namaBarang" required>
        </div>
        <div class="form-group">
            <label for="satuan">Satuan</label>
            <select class="form-control" id="satuan" name="satuan" required>
                <option value="satuan">Satuan</option>
                <option value="dus">Dus</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenisBarang">Jenis Barang</label>
            <select class="form-control" id="jenisBarang" name="jenisBarang" required>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
                <option value="pendidikan">Pendidikan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hargaBeli">Harga Beli</label>
            <input type="number" class="form-control" id="hargaBeli" name="hargaBeli" required>
        </div>
        <div class="form-group">
            <label for="hargaJual">Harga Jual</label>
            <input type="number" class="form-control" id="hargaJual" name="hargaJual" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
