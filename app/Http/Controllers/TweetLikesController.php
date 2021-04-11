<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetLikesController extends Controller
{
    public function store(Tweet $tweet)
    {
        if($tweet->isLikedBy(current_user())){
            $tweet->removeLike();
        }else{
            $tweet->like(current_user());
        }
        return back();
    }

    public function delete(Tweet $tweet)
    {
        if($tweet->isDisLikedBy(current_user())){
            $tweet->removeLike();
        }else{
            $tweet->dislike(current_user());
        }
        return back();
    }
}
