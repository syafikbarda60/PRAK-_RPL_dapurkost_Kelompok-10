@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 text-center">
            @if ($user->profile_image)
            <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Foto Profil" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
            @else
            <img src="{{ asset('assets/images/default-profile.png') }}" alt="Foto Profil" class="rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
            @endif
        </div>

        <div class="col-md-9">
            <div class="d-flex align-items-center">
                <h1>{{ $user->username }}</h1>
                @if(auth()->id() === $user->id)
                <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-outline-secondary ms-4">Edit Profile</a>
                @endif
            </div>
            <div class="d-flex mt-3">
                <div class="me-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="me-4"><strong>0</strong> followers</div>
                <div><strong>0</strong> following</div>
            </div>
            <div class="mt-3">
                <h5>{{ $user->name }}</h5>
                <p>{{ $user->bio }}</p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        @foreach($user->posts as $post)
        <div class="col-md-4 mb-4">
            <a href="{{ route('posts.show', $post->id) }}">
                <img src="{{ asset('storage/' . $post->image_path) }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
