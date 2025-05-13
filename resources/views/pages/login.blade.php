@extends('layouts.app')

@section('content')
<div class="login-container py-5">
    <div class="card login-card">
        <div class="card-body p-4">
            <h5 class="mb-3">
                <a href="{{ url()->previous() }}">
                    <i class="bi bi-arrow-left"></i>Masuk Akun
                </a>
            </h5>
            <p class="text-muted small mb-4">Silahkan login untuk melanjutkan</p>
            <form method="POST" action="">
                @csrf
                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="akun@gmail.com" required autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent">
                            <i class="bi bi-lock"></i>
                        </span>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="******" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-warning">Masuk</button>
                </div>

                <!-- Register Link -->
                <div class="text-center">
                    <span class="text-muted small">Belum punya akun? </span>
                    <a href="/register" class="text-decoration-none small">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
