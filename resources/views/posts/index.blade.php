@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-8 mb-4">
            <div class="card post-card shadow-sm border-0">
                <div class="card-header d-flex align-items-center bg-white">
                    @if($post->user)
                    <img src="{{ $post->user->profile_image ? asset('storage/' . $post->user->profile_image) : asset('assets/images/default-profile.png') }}" class="rounded-circle me-3 border" style="width: 40px; height: 40px; object-fit: cover;">
                    <a href="{{ route('profile.show', $post->user->id) }}" class="text-dark text-decoration-none fw-semibold">
                        {{ $post->user->username }}
                    </a>
                    @else
                    <img src="{{ asset('assets/images/default-profile.png') }}" class="rounded-circle me-3 border" style="width: 40px; height: 40px; object-fit: cover;">
                    <span class="text-muted">Deleted User</span>
                    @endif
                </div>
                <img src="{{ asset('storage/' . $post->image_path) }}" class="card-img-top post-image">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        @if($post->likes->where('user_id', auth()->id())->count() > 0)
                        <form action="{{ route('likes.destroy', $post->id) }}" method="POST" class="me-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link p-0 like-btn liked" title="Unlike">
                                <i class="bi bi-heart-fill"></i>
                            </button>
                        </form>
                        @else
                        <form action="{{ route('likes.store', $post->id) }}" method="POST" class="me-3">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 like-btn" title="Like">
                                <i class="bi bi-heart"></i>
                            </button>
                        </form>
                        @endif

                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-link p-0 comment-btn" title="Comments">
                            <i class="bi bi-chat"></i>
                        </a>
                    </div>

                    <p class="mb-1"><strong>{{ $post->likes->count() }} likes</strong></p>

                    @if($post->user)
                    <p class="mb-1"><strong>{{ $post->user->username }}</strong> {{ $post->caption }}</p>
                    @else
                    <p class="mb-1">{{ $post->caption }}</p>
                    @endif

                    <a href="{{ route('posts.show', $post->id) }}" class="text-muted d-block">
                        View all {{ $post->comments->count() }} comments
                    </a>

                    <p class="text-muted mt-1">{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
