@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow p-4" style="max-width: 700px; width: 100%;">
        <h3 class="text-center mb-4">Akun</h3>

        {{-- Foto profil --}}
        <div class="text-center mb-3">
            <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : 'https://via.placeholder.com/150' }}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
        </div>

        {{-- Informasi User --}}
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" value="{{ $user->name }}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" value="{{ $user->username }}" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="{{ $user->email }}" readonly>
            </div>
            <div class="col-md-6">
                <label class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" value="******" readonly>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Bio</label>
            <textarea class="form-control" rows="3" readonly>{{ $user->bio }}</textarea>
        </div>

        {{-- Tombol Edit --}}
        @if(auth()->id() === $user->id)
        <div class="text-center">
            <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-warning px-4">Edit Profil</a>
        </div>
        @endif
    </div>
</div>
@endsection
