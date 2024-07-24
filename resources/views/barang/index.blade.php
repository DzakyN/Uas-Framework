@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Jenis Barang</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $b)
            <tr>
                <td>{{ $b->namaBarang }}</td>
                <td>{{ $b->satuan }}</td>
                <td>{{ $b->jenisBarang }}</td>
                <td>{{ $b->hargaBeli }}</td>
                <td>{{ $b->hargaJual }}</td>
                <td>{{ $b->stok }}</td>
                <td>
                    <a href="{{ route('barang.edit', $b->kodeBarang) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('barang.destroy', $b->kodeBarang) }}" method="POST" style="display:inline;">
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
