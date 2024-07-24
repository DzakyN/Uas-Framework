@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pengguna</h1>
    <form action="{{ route('pengguna.update', $pengguna->kode_user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pengguna->nama }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $pengguna->email }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
        </div>
        <div class="form-group">
            <label for="statusUser">Status</label>
            <select class="form-control" id="statusUser" name="statusUser" required>
                <option value="Admin" {{ $pengguna->statusUser == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="User" {{ $pengguna->statusUser == 'User' ? 'selected' : '' }}>User</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
