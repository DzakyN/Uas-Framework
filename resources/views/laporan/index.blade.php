@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1>Laporan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('laporan.pembelian') }}" class="btn btn-primary btn-block">Laporan Pembelian</a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('laporan.penjualan') }}" class="btn btn-primary btn-block">Laporan Penjualan</a>
        </div>
    </div>
</div>
@endsection
