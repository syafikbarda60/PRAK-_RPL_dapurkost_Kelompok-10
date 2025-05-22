@extends('layouts.app')

@section('content')
<div class="container py-4" style="max-width: 700px">
    <div class="card shadow-sm">
        <div class="card-body">
            <!-- Judul -->
            <h5 class="fw-bold mb-3">Resep <span class="text-dark">nasi goreng</span></h5>

            <!-- Gambar dan Judul Resep -->
            <div class="d-flex align-items-start mb-3">
                <img src="{{ asset('assets/images/recipe-placeholder.jpg') }}" class="rounded me-3" alt="Nasi Goreng" style="width: 120px; height: 100px; object-fit: cover;">
                <div>
                    <h6 class="mb-1 fw-semibold">Nasi goreng kampung</h6>
                    <button class="btn btn-sm btn-danger">Lihat ulasan</button>
                </div>
            </div>

            <!-- Bahan-bahan -->
            <div class="mb-3">
                <h6 class="fw-bold">Bahan-bahan:</h6>
                <ul class="mb-0">
                    <li>2 piring nasi putih</li>
                    <li>1 butir telur</li>
                    <li>2 sdm minyak goreng</li>
                    <li>2 buah pete</li>
                    <li>2 cabe rawit merah</li>
                </ul>
            </div>

            <!-- Bumbu Halus -->
            <div class="mb-3">
                <h6 class="fw-bold">Bumbu halus:</h6>
                <ul class="mb-0">
                    <li>5 siung bawang merah</li>
                    <li>3 siung bawang putih</li>
                    <li>2 cabe merah besar</li>
                    <li>2 cabe rawit merah</li>
                    <li>1/2 sdt terasi</li>
                </ul>
            </div>

            <!-- Bahan Lainnya dan Alat -->
            <div class="mb-3">
                <div class="row">
                    <div class="col-sm-6">
                        <h6 class="fw-bold">Bahan lainnya:</h6>
                        <ul class="mb-0">
                            <li>2 sdm kecap manis</li>
                            <li>1/2 sdt garam</li>
                            <li>Seledri dan tomat (hiasan)</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold">Alat:</h6>
                        <ul class="mb-0">
                            <li>Wajan, spatula, sutil</li>
                            <li>Ulekan</li>
                            <li>Sendok, piring saji</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Langkah Membuat -->
            <div class="mb-2">
                <h6 class="fw-bold">Cara Membuat:</h6>
                <p class="mb-1"><strong>Waktu: 30 menit</strong></p>
                <ol class="ps-3">
                    <li>Siapkan wajan. Panaskan minyak dan tumis bumbu halus hingga harum.</li>
                    <li>Tambahkan kecap manis, telur, pete, aduk rata.</li>
                    <li>Tambahkan nasi. Aduk hingga tercampur rata.</li>
                    <li>Tambahkan garam, koreksi rasa.</li>
                    <li>Goreng hingga agak kering sesuai selera.</li>
                    <li>Angkat dan sajikan dengan tomat, selada, atau mentimun.</li>
                    <li>Selamat menikmati!</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
