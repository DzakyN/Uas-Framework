@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Penjualan</h1>
    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pembelian_id">Pembelian</label>
            <select class="form-control" id="pembelian_id" name="pembelian_id" required>
                @foreach($pembelian as $p)
                <option value="{{ $p->id }}">{{ $p->barang->namaBarang }} - {{ $p->supplier->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah_jual">Jumlah Jual</label>
            <input type="number" class="form-control" id="jumlah_jual" name="jumlah_jual" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
