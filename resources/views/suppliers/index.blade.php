@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1>Suppliers</h1>
        </div>
        <div class="col-auto">
            <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Tambah Supplier</a>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nama</th>
                <th>Contact Person</th>
                <th>Alamat</th>
                <th>Kode Perusahaan</th>
                <th>Email</th>
                <th>Kode Pos</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->contact }}</td>
                <td>{{ $supplier->alamatSupplier }}</td>
                <td>{{ $supplier->telepon }}</td>
                <td>{{ $supplier->email }}</td>
                <td>{{ $supplier->contactPerson }}</td>
                <td>
                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
