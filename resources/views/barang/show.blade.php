@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Barang</h1>
    <div class="card">
        <div class="card-header">
            {{ $barang->namaBarang }}
        </div>
        <div class="card-body">
            <p>Satuan: {{ $barang->satuan }}</p>
            <p>Jenis Barang: {{ $barang->jenisBarang }}</p>
            <p>Harga Beli: {{ $barang->hargaBeli }}</p>
            <p>Harga Jual: {{ $barang->hargaJual }}</p>
            <p>Stok: {{ $barang->stok }}</p>
            <a href="{{ route('barang.edit', $barang->kodeBarang) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('barang.destroy', $barang->kodeBarang) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
