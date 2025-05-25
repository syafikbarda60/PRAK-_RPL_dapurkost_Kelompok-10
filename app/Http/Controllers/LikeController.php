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
        // Validasi input
        $data = $request->validate([
            'liked' => 'nullable|boolean',  // ❤️ (opsional)
            'rating' => 'nullable|integer|min:1|max:5', // ★ (opsional)
        ]);

        // Cek apakah user sudah like/rating post ini
        $existing = $post->likes()->where('user_id', auth()->id())->first();

        if ($existing) {
            return back()->with('message', 'You have already rated or liked this post.');
        }

        // Simpan data ke relasi likes
        $post->likes()->create([
            'user_id' => auth()->id(),
            'liked' => $data['liked'] ?? true, // default like = true
            'rating' => $data['rating'] ?? null,
        ]);

        return back()->with('message', 'Thank you for your feedback!');
    }

    public function destroy(Post $post)
    {
        $post->likes()->where('user_id', auth()->id())->delete();

        return back()->with('message', 'Feedback removed.');
    }
}
