@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pengguna</h1>
    <form action="{{ route('pengguna.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="statusUser">Status</label>
            <select class="form-control" id="statusUser" name="statusUser" required>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
