@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Laporan</h1>
    <a href="{{ route('laporan.pembelian') }}" class="btn btn-primary">Laporan Pembelian</a>
    <a href="{{ route('laporan.penjualan') }}" class="btn btn-primary">Laporan Penjualan</a>
</div>
@endsection
