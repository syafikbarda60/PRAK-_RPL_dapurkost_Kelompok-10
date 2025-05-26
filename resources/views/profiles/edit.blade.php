@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">
            <div class="card shadow-sm edit-profile-card p-4">
                <h4 class="text-center mb-4">Edit Profil</h4>

                <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <div class="input-group">
                            <span class="input-group-text bg-transparent">
                                <i class="bi bi-person"></i>
                            </span>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required>
                        </div>
                        @error('name')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Username -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text bg-transparent">
                                <i class="bi bi-at"></i>
                            </span>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', $user->username) }}" required>
                        </div>
                        @error('username')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Bio -->
                    {{-- <div class="mb-3">
                        <label for="bio" class="form-label">Bio</label>
                        <textarea id="bio" class="form-control @error('bio') is-invalid @enderror" name="bio" rows="3">{{ old('bio', $user->bio) }}</textarea>
                    @error('bio')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
            </div> --}}

            <!-- Upload Gambar Baru + Preview -->
            <div class=" mb-3">
                <label for="profile_image" class="form-label">
                    Photo Profile
                </label>
                <input class="input-image form-control @error('profile_image') is-invalid @enderror" type="file" id="profile_image" name="profile_image" accept="image/*">

                {{-- Tempat preview gambar --}}
                <div id="image-preview justify-align-center" class="mt-3">
                    <img id="preview-img" src="#" alt="Preview" class="img-fluid rounded-circle d-none" style="width: 120px; height: 120px; object-fit: cover;">
                </div>

                @error('profile_image')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <!-- Submit -->
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Perbarui Profil</button>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection
