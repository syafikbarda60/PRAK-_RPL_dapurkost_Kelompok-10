@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Form Card Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="text-center mb-3">Daftar akun</h4>

                    <form method="POST" action="">
                        @csrf

                        <!-- Email and Nama Pengguna Row -->
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="akun@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label">Nama pengguna</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="******" required>
                                </div>
                            </div>
                        </div>

                        <!-- Nama Lengkap and Kata Sandi Row -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="akun@gmail.com" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="******" required>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
