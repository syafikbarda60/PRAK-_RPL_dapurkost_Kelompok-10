@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white fw-bold">Edit Post</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="caption" class="form-label">Caption</label>
                            <textarea id="caption" class="form-control @error('caption') is-invalid @enderror" name="caption" rows="4" placeholder="Update your caption...">{{ old('caption', $post->caption) }}</textarea>
                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">
                                Cancel
                            </a>
                            <button type="submit" class="btn btn-danger">
                                Update Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
