<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function showEdit(User $user)
    {
        /* if($user->isNot(current_user())){
            abort(403);
        } */

       // $this->authorize('edit', $user);

        return view('profiles.edit', compact('user'));
    }
}
