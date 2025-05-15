@extends('layouts.app')

@section('content')
<div class="container py-4" style="max-width: 800px">
    <!-- Input Pencarian -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Resep <strong>nasi goreng</strong></h5>
        <form class="input-group" style="max-width: 300px;">
            <input type="text" class="form-control" placeholder="Cari resep dan bahan...">
            <button type="submit" class="btn btn-warning">Cari</button>
        </form>
    </div>

    <!-- Kartu Resep -->
    @for ($i = 0; $i < 5; $i++) <div class="card mb-3 shadow-sm">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/recipe-placeholder.jpg') }}" class="img-fluid h-100 rounded-start object-fit-cover" alt="Nasi Goreng">
            </div>
            <div class="col-md-8">
                <div class="card-body py-2 px-3">
                    <h6 class="card-title mb-1 fw-bold">Nasi goreng kampung</h6>
                    <p class="card-text small text-muted mb-1">nasi semalam, telur, pete, bawang merah, bawang putih, cabe rawit merah, cabe merah...</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="small text-muted">
                            <i class="bi bi-clock me-1"></i> 15 menit
                            <span class="ms-3"><i class="bi bi-person-circle me-1"></i> Akung123</span>
                        </div>
                        <div>
                            <span class="text-warning">★☆☆☆☆</span>
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
