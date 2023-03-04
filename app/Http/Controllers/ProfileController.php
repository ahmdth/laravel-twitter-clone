<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Laravel\Ui\Presets\React;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view("profile.show", [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->get()
        ]);
    }

    public function edit(User $user)
    {
        $this->authorize("edit", $user);
        return view("profile.edit",  [
            'user' => $user,
            'tweets' => $user->tweets
        ]);
    }

    public function update(Request $request, User $user)
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255', 'string'],
            'username' => ['required', 'max:255', Rule::unique('users')->ignore($user)],
            'email' => ['required', 'string', 'email', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'min:6', 'max:50', 'confirmed'],
            'avatar' =>['file', 'image'],
        ]);
        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }
        $user->updateOrFail($attributes);
        return redirect()->route('profiles.edit', Auth::user())->with(['status', 'Profile updated successfully']);
    }
}
