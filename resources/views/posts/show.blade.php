@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-8">
            <img src="{{ asset('storage/' . $post->image_path) }}" class="w-100 rounded" style="max-height: 550px; object-fit: cover;">
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-3">
                <div class="d-flex align-items-center mb-3">
                    @if($post->user)
                    <img src="{{ $post->user->profile_image ? asset('storage/' . $post->user->profile_image) : 'https://via.placeholder.com/40' }}" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                    <a href="{{ route('profile.show', $post->user->id) }}" class="text-dark text-decoration-none fw-semibold">
                        {{ $post->user->username }}
                    </a>

                    @if(auth()->id() === $post->user_id)
                    <div class="dropdown ms-auto">
                        <button class="btn btn-link text-dark" type="button" id="postOptions" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="postOptions">
                            <li>
                                <a class="dropdown-item" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                            </li>
                            <li>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger">Delete</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @endif
                    @else
                    <img src="https://via.placeholder.com/40" class="rounded-circle me-3" style="width: 40px; height: 40px;">
                    <span class="text-muted">Deleted User</span>
                    @endif
                </div>

                <p><strong>{{ $post->user->username ?? 'User' }}</strong> {{ $post->caption }}</p>

                <div class="d-flex align-items-center my-2">
                    @if($post->likes->where('user_id', auth()->id())->count() > 0)
                    <form action="{{ route('likes.destroy', $post->id) }}" method="POST" class="me-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link p-0">
                            <i class="fas fa-heart text-danger"></i>
                        </button>
                    </form>
                    @else
                    <form action="{{ route('likes.store', $post->id) }}" method="POST" class="me-2">
                        @csrf
                        <button type="submit" class="btn btn-link p-0">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    @endif
                    <span>{{ $post->likes->count() }} likes</span>
                </div>

                <p class="text-muted">{{ $post->created_at->format('F d, Y') }}</p>

                <hr>

                <div class="comments-section mb-3" style="max-height: 250px; overflow-y: auto;">
                    @foreach($post->comments as $comment)
                    <div class="d-flex align-items-start mb-2">
                        <div>
                            <strong>{{ $comment->user->username ?? 'Deleted User' }}</strong>
                            <span>{{ $comment->comment }}</span>
                        </div>

                        @if(auth()->id() === $comment->user_id || auth()->id() === $post->user_id)
                        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="ms-auto">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link p-0 text-danger">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                        @endif
                    </div>
                    @endforeach
                </div>

                <form action="{{ route('comments.store', $post->id) }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="comment" class="form-control" placeholder="Add a comment..." required>
                        <button class="btn btn-outline-danger" type="submit">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
