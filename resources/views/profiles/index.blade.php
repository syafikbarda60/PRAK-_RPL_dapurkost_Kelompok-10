@extends('layouts.app')

@section('content')
<div class="container text-white py-5 px-4 rounded">
    <div class="row">
        <div class="col-md-3 text-center mb-4 mb-md-0">
            @if ($user->profile_image)
            <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Foto Profil" class="rounded-circle border border-light border-2" style="width: 120px; height: 120px; object-fit: cover;">
            @else
            <img src="{{ asset('assets/images/default-profile.png') }}" alt="Foto Profil" class="rounded-circle border border-light border-2" style="width: 120px; height: 120px; object-fit: cover;">
            @endif
        </div>

        <div class="col-md-9">
            <div class="d-flex flex-column flex-md-row align-items-md-center">
                <h1 class="mb-2 mb-md-0">{{ $user->username }}</h1>
                @if(auth()->id() === $user->id)
                <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-outline-light ms-md-4">
                    Edit Profile
                </a>
                @endif
            </div>

            <div class="d-flex mt-3">
                <div class="me-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                {{-- <div class="me-4"><strong>0</strong> followers</div>
                <div><strong>0</strong> following</div> --}}
            </div>

            <div class="mt-3">
                <h5>{{ $user->name }}</h5>
                <p class="text-light">{{ $user->bio }}</p>
            </div>
        </div>
    </div>

    <hr class="border-light my-5">

    <div class="row">
        @forelse($user->posts as $post)
        <div class="col-md-4 mb-4">
            <div class="border rounded overflow-hidden shadow-sm bg-secondary">
                <a href="{{ route('posts.show', $post->id) }}">
                    <img src="{{ asset('storage/' . $post->image_path) }}" class="w-100" style="object-fit: cover; height: 400px;">
                </a>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <p class="text-light">Belum ada postingan.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection
