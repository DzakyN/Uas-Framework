@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1>Pengguna</h1>
        </div>
        <div class="col-auto">
            <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah Pengguna</a>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengguna as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->statusUser }}</td>
                <td>
                    <a href="{{ route('pengguna.edit', $p->kode_user) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pengguna.destroy', $p->kode_user) }}" method="POST" style="display:inline;">
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
