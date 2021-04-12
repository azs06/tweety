<?php

namespace App;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

trait Likeable{

    
    public function scopeWithLikes(Builder $query){
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function like($user = null, $liked = true){
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->user()->id
        ],[
            'liked' => $liked,
        ]);
    }

    public function removeLike($user = null)
    {
        $this->likes()->update([
            'user_id' => $user ? $user->id : auth()->user()->id,
            'liked' => null
        ]);
    }

    public function dislike($user = null){
        $this->like($user, false);
    }

    public function isLikedBy(User $user){
        return (bool)$user->likes->where('tweet_id', $this->id)->where('liked', true)->count();
    }

    public function isDisLikedBy(User $user){
        $isNull = (bool)$user->likes->where('tweet_id', $this->id)->whereNull('liked')->count();
        return $isNull ? false : (bool)$user->likes->where('tweet_id', $this->id)->where('liked', false)->count();
    }

    public function likes(){
        return $this->hasMany(\App\Models\Like::class);
    }

}