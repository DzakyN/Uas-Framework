@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1>Penjualan</h1>
        </div>
        <div class="col-auto">
            <a href="{{ route('penjualan.create') }}" class="btn btn-primary">Tambah Penjualan</a>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
            <thead class="thead-dark">
            <tr>
                <th>Nama Barang</th>
                <th>Nama Supplier</th>
                <th>Jumlah Jual</th>
                <th>Harga Jual</th>
                <th>Total Harga</th>
                <th>Keuntungan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penjualan as $p)
            <tr>
                <td>{{ $p->pembelian->barang->namaBarang }}</td>
                <td>{{ $p->pembelian->supplier->name }}</td>
                <td>{{ $p->jumlah_jual }}</td>
                <td>{{ $p->harga_jual }}</td>
                <td>{{ $p->total_harga }}</td>
                <td>{{ $p->keuntungan }}</td>
                <td>
                    <a href="{{ route('penjualan.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('penjualan.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="alert alert-info mt-3 fixed-bottom">
        <h3>Total Keuntungan: Rp. {{ number_format($totalKeuntungan, 2, ',', '.') }}</h3>
    </div>
</div>
@endsection

