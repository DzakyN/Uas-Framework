@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penjualan</h1>
    <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pembelian_id">Pembelian</label>
            <select class="form-control" id="pembelian_id" name="pembelian_id" required>
                @foreach($pembelian as $p)
                <option value="{{ $p->id }}" {{ $penjualan->pembelian_id == $p->id ? 'selected' : '' }}>
                    {{ $p->barang->namaBarang }} - {{ $p->supplier->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah_jual">Jumlah Jual</label>
            <input type="number" class="form-control" id="jumlah_jual" name="jumlah_jual" value="{{ $penjualan->jumlah_jual }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
