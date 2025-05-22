@extends('layouts.app')

@section('content')
<div class="menu-container">
    <div class="menu-header">
        <h4 class="text-center mb-3">Menu</h4>
    </div>

    <div class="search-container mb-3">
        <div class="input-group">
            <input type="text" class="form-control" id="searchInput" placeholder="Cari masakan kamu..." aria-label="Search">
            {{-- Ubah jadi form dan button untuk anchor nya --}}
            <a href="/searchresult" class="btn btn-warning" role="button">Cari</a>
        </div>
    </div>

    <div class="filter-container mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <h6 class="mb-0">Menu Makanan</h6>
            <button class="btn btn-sm border-dark">
                Filter <i class="bi bi-funnel"></i>
            </button>
        </div>
    </div>

    <div class="menu-grid">
        <div class="row g-3">
            @for ($i = 1; $i <= 6; $i++) <div class="col-12 col-sm-6 col-lg-3"> {{-- 4 kolom di layar besar --}}
                <div class="card menu-card h-100">
                    <div class="menu-img-container">
                        <img src="{{ asset('assets/images/recipe-placeholder.jpg') }}" class="card-img-top" alt="Resep Masakan">
                    </div>
                    <div class="card-body text-center p-2">
                        <h6 class="card-title mb-0">Nasi goreng</h6>
                    </div>
                </div>
        </div>
        @endfor
    </div>
</div>
</div>
@endsection
