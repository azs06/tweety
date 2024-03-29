<?php

namespace App;
use App\Models\User;

trait Followable{

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        if($this->following($user)){
            $this->unfollow($user);
        }else{
            $this->follow($user);
        }
    }

    public function following(User $user){
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id')->withTimestamps();
    }

}