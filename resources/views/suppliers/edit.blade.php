@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Supplier</h1>
    <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $supplier->name }}" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact Person</label>
            <input type="text" class="form-control" id="contact" name="contact" value="{{ $supplier->contact }}" required>
        </div>
        <div class="form-group">
            <label for="alamatSupplier">Alamat</label>
            <input type="text" class="form-control" id="alamatSupplier" name="alamatSupplier" value="{{ $supplier->alamatSupplier }}" required>
        </div>
        <div class="form-group">
            <label for="telepon">Kode Perusahaan</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $supplier->telepon }}" required>
        </div>
        <div class="form-group">
            <label for="fax">Fax</label>
            <input type="text" class="form-control" id="fax" name="fax" value="{{ $supplier->fax }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $supplier->email }}" required>
        </div>
        <div class="form-group">
            <label for="contactPerson">Kode Pos</label>
            <input type="text" class="form-control" id="contactPerson" name="contactPerson" value="{{ $supplier->contactPerson }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
