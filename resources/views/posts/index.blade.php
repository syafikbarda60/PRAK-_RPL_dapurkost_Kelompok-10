@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Menu</h2>

    {{-- Grid Layout --}}
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        @foreach($posts as $post)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    {{-- User Header --}}
                    <div class="card-header d-flex align-items-center bg-white">
                        @if($post->user)
                            <img src="{{ $post->user->profile_image ? asset('storage/' . $post->user->profile_image) : 'https://via.placeholder.com/40' }}" class="rounded-circle me-2" style="width: 40px; height: 40px;">
                            <a href="{{ route('profile.show', $post->user->id) }}" class="text-dark text-decoration-none">
                                <strong>{{ $post->user->username }}</strong>
                            </a>
                        @else
                            <img src="https://via.placeholder.com/40" class="rounded-circle me-2" style="width: 40px; height: 40px;">
                            <span class="text-muted">Deleted User</span>
                        @endif
                    </div>

                    {{-- Image --}}
                    <img src="{{ asset('storage/' . $post->image_path) }}" class="card-img-top" style="height: 200px; object-fit: cover;">

                    {{-- Post Body --}}
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            {{-- Like + Comment Icon --}}
                            <div class="d-flex mb-2">
                                @if($post->likes->where('user_id', auth()->id())->count() > 0)
                                    <form action="{{ route('likes.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link p-0 me-2">
                                            <i class="fas fa-heart text-danger"></i>
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('likes.store', $post->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 me-2">
                                            <i class="far fa-heart"></i>
                                        </button>
                                    </form>
                                @endif
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-link p-0">
                                    <i class="far fa-comment"></i>
                                </a>
                            </div>

                            {{-- Like Count --}}
                            <p class="mb-1"><strong>{{ $post->likes->count() }} likes</strong></p>

                            {{-- Caption --}}
                            @if($post->user)
                                <p class="mb-1"><strong>{{ $post->user->username }}</strong> {{ $post->caption }}</p>
                            @else
                                <p class="mb-1">{{ $post->caption }}</p>
                            @endif

                            {{-- Comments + Time --}}
                            <a href="{{ route('posts.show', $post->id) }}" class="text-muted d-block mb-1">
                                View all {{ $post->comments->count() }} comments
                            </a>
                            <p class="text-muted mb-0">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
