<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ratingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Post $post)
    {
        $data = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Cek apakah user sudah kasih rating
        $existing = $post->likes()->where('user_id', auth()->id())->first();

        if ($existing) {
            $existing->update(['rating' => $data['rating']]);
            return back()->with('message', 'Rating updated.');
        }

        // Jika belum ada, buat entri baru
        $post->likes()->create([
            'user_id' => auth()->id(),
            'liked' => false, // or null if preferred
            'rating' => $data['rating'],
        ]);

        return back()->with('message', 'Rating submitted!');
    }

    public function destroy(Post $post)
    {
        $post->likes()->where('user_id', auth()->id())->update(['rating' => null]);

        return back()->with('message', 'Rating removed.');
    }
}

