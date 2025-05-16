<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuMakanan;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(MenuMakanan $MenuMakanan)
    {
        $MenuMakanan->likes()->create([
            'user_id' => auth()->id(),
        ]);

        return back();
    }

    public function destroy(MenuMakanan $MenuMakanan)
    {
        $MenuMakanan->likes()->where('user_id', auth()->id())->delete();

        return back();
    }
}
