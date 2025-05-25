@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow p-4" style="max-width: 700px; width: 100%;">
        <h3 class="text-center mb-4">Edit Profil</h3>

        <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-3 text-center">
                <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : 'https://via.placeholder.com/150' }}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name', $user->name) }}" required>
                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Nama Pengguna</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                       name="username" value="{{ old('username', $user->username) }}" required>
                @error('username') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="bio" class="form-label">Bio</label>
                <textarea id="bio" class="form-control @error('bio') is-invalid @enderror"
                          name="bio" rows="3">{{ old('bio', $user->bio) }}</textarea>
                @error('bio') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="profile_image" class="form-label">Foto Profil</label>
                <input type="file" class="form-control @error('profile_image') is-invalid @enderror"
                       id="profile_image" name="profile_image">
                @error('profile_image') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection
