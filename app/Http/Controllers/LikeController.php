<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Post $post, Request $request)
    {
        // Validasi input kalau ada
        $data = $request->validate([
            'liked' => 'nullable|boolean',
        ]);

        $existing = $post->likes()->where('user_id', auth()->id())->first();

        if ($existing && $existing->liked) {
            return back()->with('message', 'You have already liked this post.');
        }

        $post->likes()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['liked' => $data['liked'] ?? true]
        );

        return back()->with('message', 'Post liked!');
    }

    public function destroy(Post $post)
    {
        $post->likes()->where('user_id', auth()->id())->delete();

        return back()->with('message', 'Feedback removed.');
    }
}
