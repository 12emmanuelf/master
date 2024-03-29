<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
        'password'=> 'password',
    ]);

    auth()->user()->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->passworld,
    ]);

    return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
}
}

