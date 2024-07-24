@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penjualan</h1>
    <div class="card">
        <div class="card-header">
            {{ $penjualan->pembelian->barang->namaBarang }}
        </div>
        <div class="card-body">
            <p>Nama Supplier: {{ $penjualan->pembelian->supplier->name }}</p>
            <p>Jumlah Jual: {{ $penjualan->jumlah_jual }}</p>
            <p>Harga Jual: {{ $penjualan->harga_jual }}</p>
            <p>Total Harga: {{ $penjualan->total_harga }}</p>
            <p>Keuntungan: {{ $penjualan->keuntungan }}</p>
            <a href="{{ route('penjualan.edit', $penjualan->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
