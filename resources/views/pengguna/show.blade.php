@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pengguna</h1>
    <div class="card">
        <div class="card-header">
            {{ $pengguna->nama }}
        </div>
        <div class="card-body">
            <p>Email: {{ $pengguna->email }}</p>
            <p>Status: {{ $pengguna->statusUser }}</p>
            <a href="{{ route('pengguna.edit', $pengguna->kode_user) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('pengguna.destroy', $pengguna->kode_user) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
