<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    
    public function index()
    {
        //ddd(auth()->user()->tweets);
        return view('home', [
            'tweets' => auth()->user()->timeline()
        ]);
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'body' => 'required|max:255'
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $validated['body']
        ]);
        return redirect('/home');
    }

    public function update()
    {

    }
}
