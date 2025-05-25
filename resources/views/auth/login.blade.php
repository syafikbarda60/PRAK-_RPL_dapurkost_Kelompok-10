@extends('layouts.app')

@section('content')
<div class="login-container py-5">
    <div class="card login-card mx-auto" style="max-width: 400px;">
        <div class="card-body p-4">
            <h5 class="mb-3">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-dark">
                    <i class="bi bi-arrow-left"></i> Masuk Akun
                </a>
            </h5>
            <p class="text-muted small mb-4">Silahkan login untuk melanjutkan</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" placeholder="akun@gmail.com" required autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent">
                            <i class="bi bi-lock"></i>
                        </span>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password" placeholder="******" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Ingat Saya
                    </label>
                </div>

                <!-- Login Button -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-warning">Masuk</button>
                </div>

                <!-- Forgot password + Register -->
                <div class="d-flex justify-content-between">
                    @if (Route::has('password.request'))
                    <a class="small text-decoration-none" href="{{ route('password.request') }}">
                        Lupa kata sandi?
                    </a>
                    @endif
                    <a href="{{ route('register') }}" class="small text-decoration-none">
                        Daftar akun baru
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
