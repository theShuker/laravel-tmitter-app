<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    public function index(){
        $tweets = Tweet::all()->sortDesc();
        return view('home', compact(['tweets']));
    }

    public function create(){
        return view('tweet.create');
    }

    public function show(Tweet $tweet)
    {
        return view('tweet.show', compact('tweet'));
    }

    public function edit(Tweet $tweet)
    {
        if($tweet->user->id !== Auth::id()) return 'unauthorized';

        return view('tweet.edit', compact('tweet'));
    }

    public function store(){
        $data = request()->validate([
            'text' => 'string'
        ]);

        $newTweet = new Tweet($data);
        $newTweet->user()->associate(Auth::id());


        $newTweet->save();

        return redirect()->route('home');
    }

    public function update(Tweet $tweet){

        if($tweet->user->id !== Auth::id()) return 'unauthorized';

        $data = request()->validate([
            'text' => 'string'
        ]);

        $tweet->update($data);

        return redirect()->route('tweet.show', $tweet->id);
    }

    public function delete(Tweet $tweet){
        if($tweet->user->id !== Auth::id()) return 'unauthorized';

        $tweet->deleteOrFail();

        return redirect()->route('home');
    }
}
