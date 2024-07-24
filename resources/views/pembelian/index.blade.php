@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pembelian</h1>
    <a href="{{ route('pembelian.create') }}" class="btn btn-primary">Tambah Pembelian</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Nama Supplier</th>
                <th>Total Beli</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembelian as $p)
            <tr>
                <td>{{ $p->barang->namaBarang }}</td>
                <td>{{ $p->supplier->name }}</td>
                <td>{{ $p->total_beli }}</td>
                <td>{{ $p->total_harga }}</td>
                <td>
                    <a href="{{ route('pembelian.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pembelian.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
