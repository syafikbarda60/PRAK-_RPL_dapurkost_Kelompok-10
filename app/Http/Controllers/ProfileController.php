<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
         // Check if the authenticated user is the same as the profile user
         if (auth()->id() !== $user->id) {
            abort(403, 'Unauthorized action.');
        }
        
        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Check if the authenticated user is the same as the profile user
        if (auth()->id() !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'profile_image' => 'image|nullable|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'required',
        ]);

        if ($request->hasFile('profile_image')) {
            // Delete old profile image if exists
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }
            
            $imagePath = $request->file('profile_image')->store('profile', 'public');
            $data['profile_image'] = $imagePath;
        }

        $user->update($data);

        return redirect("/profile/{$user->id}");
    }
}


