<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userprofile()
    {
        return view('userprofile');
    }

    public function about()
    {
        return view('about');
    }

    public function updateProfile(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update user profile
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        // Redirect back with a success message
        return redirect()->route('userprofile')->with('success', 'Profile updated successfully.');
    }
}
