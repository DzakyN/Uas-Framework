@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Supplier</h1>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact Person</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
        </div>
        <div class="form-group">
            <label for="alamatSupplier">Alamat</label>
            <input type="text" class="form-control" id="alamatSupplier" name="alamatSupplier" required>
        </div>
        <div class="form-group">
            <label for="telepon">Kode Perusahaan</label>
            <input type="text" class="form-control" id="telepon" name="telepon" required>
        </div>
        <div class="form-group">
            <label for="fax">Fax</label>
            <input type="text" class="form-control" id="fax" name="fax">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="contactPerson">Kode Pos</label>
            <input type="text" class="form-control" id="contactPerson" name="contactPerson" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
