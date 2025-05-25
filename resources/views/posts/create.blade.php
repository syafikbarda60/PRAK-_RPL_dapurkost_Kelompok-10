@extends('layouts.app')

@section('content')
<div class="create-container d-flex justify-content-center align-items-center">
    <div class="card create-card p-4 mb-5" style="width: 400px;">
        <h4 class="text-center mb-3">Buat Postingan Baru</h4>
        <p class="text-center text-muted" style="font-size: 14px;">
            Bagikan momen kulinermu dan beri inspirasi ke pengguna lainnya!
        </p>

        {{-- Form Upload --}}
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf

            {{-- Upload Gambar --}}
            {{-- Upload Gambar --}}
            <div class="text-center mb-3">
                <label for="image" class="form-label">
                    <i class="bi bi-image" style="font-size: 48px;"></i><br>
                    Tambahkan gambar
                </label>
                <input class="input-image form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" required>

                {{-- Tempat preview gambar --}}
                <div id="image-preview" class="mt-3">
                    <img id="preview-img" src="#" alt="Preview" class="img-fluid rounded d-none" style="max-height: 200px; object-fit: cover;">
                </div>

                @error('image')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>


            {{-- Caption --}}
            <div class="mb-3">
                <textarea class="form-control @error('caption') is-invalid @enderror" name="caption" placeholder="Tulis caption untuk postingan ini..." rows="3" required>{{ old('caption') }}</textarea>
                @error('caption')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            {{-- Tombol Submit --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Unggah</button>
            </div>
        </form>
    </div>
</div>
@endsection
