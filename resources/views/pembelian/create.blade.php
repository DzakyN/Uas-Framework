@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pembelian</h1>
    <form action="{{ route('pembelian.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="barang_id">Nama Barang</label>
            <select class="form-control" id="barang_id" name="barang_id" required>
                @foreach($barang as $b)
                <option value="{{ $b->kodeBarang }}">{{ $b->namaBarang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="supplier_id">Nama Supplier</label>
            <select class="form-control" id="supplier_id" name="supplier_id" required>
                @foreach($suppliers as $s)
                <option value="{{ $s->id }}">{{ $s->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="total_beli">Total Beli</label>
            <input type="number" class="form-control" id="total_beli" name="total_beli" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
