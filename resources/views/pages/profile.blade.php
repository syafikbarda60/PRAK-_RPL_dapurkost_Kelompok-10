@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card profile-card">
        <div class="card-body p-4">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-0">Akun</h5>
            </div>

            <!-- Profile Picture -->
            <div class="text-center mb-4">
                <div class="mb-3">
                    <img src="assets/images/default-profile.png" alt="Foto Profil" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
                </div>
                <div class="d-flex justify-content-center gap-2">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#changePhotoModal">
                        Ganti foto
                    </button>
                    <button class="btn btn-outline-secondary btn-sm">Hapus</button>
                </div>
            </div>

            <!-- Form Profil -->
            <form>
                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="form-label">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text bg-transparent"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="Rizki Febri...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nama Pengguna</label>
                        <div class="input-group">
                            <span class="input-group-text bg-transparent"><i class="bi bi-at"></i></span>
                            <input type="text" class="form-control" placeholder="akung123...">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-transparent"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" placeholder="akung@gmail.com">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kata Sandi</label>
                        <div class="input-group">
                            <span class="input-group-text bg-transparent"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" placeholder="******">
                        </div>
                        <small class="text-muted">Kosongkan jika tidak ingin mengubah kata sandi</small>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-warning px-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Navigasi Bawah -->
    <div class="d-flex justify-content-between mt-4">
        <a href="#" class="btn btn-light flex-grow-1 me-2"><i class="bi bi-house-door"></i> Beranda utama</a>
        <a href="#" class="btn btn-light flex-grow-1 me-2"><i class="bi bi-palette"></i> Tampilan</a>
        <button class="btn btn-light flex-grow-1 me-2" onclick="setLightMode()"><i class="bi bi-sun"></i> Mode terang</button>
        <button class="btn btn-dark flex-grow-1" onclick="setDarkMode()"><i class="bi bi-moon"></i> Mode gelap</button>
    </div>
</div>

<!-- Modal Ganti Foto -->
<div class="modal fade" id="changePhotoModal" tabindex="-1" aria-labelledby="changePhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ganti Foto Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <form id="avatarForm">
                    <div class="mb-3 text-center">
                        <img src="assets/images/default-avatar.jpg" id="avatarPreview" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                        <label for="avatar" class="form-label d-block">
                            <span class="btn btn-outline-primary"><i class="bi bi-upload"></i> Pilih Foto</span>
                        </label>
                        <input type="file" class="form-control d-none" id="avatar" accept="image/*" onchange="previewAvatar()">
                        <div class="small text-muted mt-1">Format: JPG, PNG, GIF (Maks. 2MB)</div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-warning" form="avatarForm">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endsection
