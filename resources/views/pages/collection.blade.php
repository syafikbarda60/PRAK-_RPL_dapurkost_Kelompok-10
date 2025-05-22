@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="mb-4 text-center">
        <h4 class="fw-bold">Koleksi</h4>
        <div class="d-flex justify-content-center mt-3">
            <input class="form-control me-2 w-50" type="search" placeholder="Nasi goreng, nasi orak arik...">
            <button class="btn btn-warning">Cari</button>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center gap-3 mb-4">
        <span>(0 Resep)</span>
        <button class="btn btn-outline-secondary btn-sm">Pilih</button>
        <button class="btn btn-outline-secondary btn-sm">Semua</button>
        <button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        {{-- Dummy data --}}
        @for ($i = 1; $i <= 6; $i++) <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('assets/images/recipe-placeholder.jpg') }}" class="card-img-top" alt="Resep Masakan">
                <div class="card-body">
                    <h5 class="card-title mb-1">Nama Masakan {{ $i }}</h5>
                    <small class="text-muted">User123 🍳</small>
                </div>
            </div>
    </div>
    @endfor
</div>

</div>
@endsection
