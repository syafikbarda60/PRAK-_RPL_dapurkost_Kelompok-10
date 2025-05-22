<?php

use Illuminate\Support\Facades\Route;

// Buat Nyoba aja
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/register', function () {
    return view('pages.register');
})->name('show.register');;

Route::get('/login', function () {
    return view('pages.login');
})->name('show.login');

Route::post('/login', function (Illuminate\Http\Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
    $staticEmail = 'akun@gmail.com';
    $staticPassword = '123';
    if ($request->email === $staticEmail && $request->password === $staticPassword) {

        session(['logged_in' => true, 'user_email' => $request->email]);
        return redirect('/')->with('success', 'Berhasil login!');
    } else {
        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }
});

Route::post('/logout', function () {
    session()->flush();
    return redirect('/login');
})->name('logout');

Route::get('/search', function () {
    return view('pages.search');
});

Route::get('/searchresult', function () {
    return view('pages.searchresult');
});

Route::get('/create', function () {
    if (!session('logged_in')) {
        return redirect('/login');
    }
    return view('pages.create');
});
Route::get('/collection', function () {
    if (!session('logged_in')) {
        return redirect('/login');
    }
    return view('pages.collection');
});
Route::get('/recipe', function () {
    return view('pages.recipe');
});
Route::get('/profile', function () {
    if (!session('logged_in')) {
        return redirect('/login');
    }
    return view('pages.profile');
});
