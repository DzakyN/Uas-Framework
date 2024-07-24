@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Supplier</h1>
    <div class="card">
        <div class="card-header">
            {{ $supplier->name }}
        </div>
        <div class="card-body">
            <p>Contact: {{ $supplier->contact }}</p>
            <p>Alamat: {{ $supplier->alamatSupplier }}</p>
            <p>Telepon: {{ $supplier->telepon }}</p>
            <p>Fax: {{ $supplier->fax }}</p>
            <p>Email: {{ $supplier->email }}</p>
            <p>Contact Person: {{ $supplier->contactPerson }}</p>
            <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
