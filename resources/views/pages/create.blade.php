@extends('layouts.app')

@section('content')
<div class="create-container d-flex justify-content-center align-items-center">
    <div class="card create-card p-4 mb-5" style="width: 400px;">
        <h4 class="text-center mb-3">Bagikan resep masakanmu</h4>
        <p class="text-center text-muted" style="font-size: 14px;">
            Unggah Kreasi Masakan Terbaikmu dan Jadikan Masakanmu Bintang di Katalog Ini!
        </p>

        {{-- Form Upload --}}
        <form method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Upload Gambar --}}
            <div class="text-center mb-3">
                <label for="gambar" class="form-label">
                    <i class="bi bi-image" style="font-size: 48px;"></i><br>
                    Tambahkan gambar
                </label>
                <input class="input-image form-control" type="file" id="gambar" name="gambar" required>
            </div>

            {{-- Input Judul --}}
            <div class="mb-3">
                <input type="text" class="form-control" name="judul" placeholder="Tambahkan judul masakan..." required>
            </div>

            {{-- Input Deskripsi --}}
            <div class="mb-3">
                <textarea class="form-control" name="deskripsi" placeholder="Tambahkan deskripsi masakan..." rows="3" required></textarea>
            </div>

            {{-- Tombol Submit --}}
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Unggah</button>
            </div>
        </form>
    </div>
</div>
<div class="container text-start p-5" style="background-color: red">
    <h4 class="text-center pbguit-4">Resep Populer</h4>
    <div class="row g-4">
        @for ($i = 1; $i <= 6; $i++) <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm overflow-hidden">
                <div class="row g-0 h-100">
                    <div class="col-4">
                        <img src="{{ asset('assets/images/recipe-placeholder.jpg') }}" alt="Resep Masakan" class="img-fluid h-100 object-fit-cover rounded-start">
                    </div>
                    <div class="col-8">
                        <div class="card-body d-flex flex-column justify-content-between py-3 px-3 h-100">
                            {{-- Judul dan Deskripsi --}}
                            <div>
                                <h6 class="card-title fw-bold mb-1">Resep Masakan #{{ $i }}</h6>
                                <p class="card-text small text-muted mb-2">Deskripsi singkat tentang resep masakan yang menggugah selera.</p>
                                <div class="small text-muted mb-1">
                                    <i class="bi bi-person-circle me-1"></i>Akung123
                                </div>
                            </div>

                            {{-- Waktu dan Bookmark --}}
                            <div class="d-flex justify-content-between align-items-center small text-muted">
                                <span><i class="bi bi-clock me-1"></i>9 menit lalu</span>
                                <button class="btn bookmark-btn border-0 shadow-none">
                                    <i class="bi bi-bookmark bookmark-icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endfor
</div>


@endsection
