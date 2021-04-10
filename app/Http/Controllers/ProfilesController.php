<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(50)
        ]);
    }

    public function showEdit(User $user)
    {
        /* if($user->isNot(current_user())){
            abort(403);
        } */

       // $this->authorize('edit', $user);

       //ddd($user->description);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){
        $attributes = request()->validate([
            'username' => ['required', 'string', 'max:255','alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['required', 'string', 'max:255'],
            'avatar' => ['file'],
            'description' => ['max:1000'],
            'banner' => ['file'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed'],
        ]);
        if(array_key_exists('avatar', $attributes)){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect($user->path());

    }
}
