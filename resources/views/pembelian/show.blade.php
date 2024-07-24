@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pembelian</h1>
    <div class="card">
        <div class="card-header">
            {{ $pembelian->barang->namaBarang }}
        </div>
        <div class="card-body">
            <p>Nama Supplier: {{ $pembelian->supplier->name }}</p>
            <p>Total Beli: {{ $pembelian->total_beli }}</p>
            <p>Total Harga: {{ $pembelian->total_harga }}</p>
            <a href="{{ route('pembelian.edit', $pembelian->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('pembelian.destroy', $pembelian->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
