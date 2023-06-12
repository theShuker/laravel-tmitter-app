<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

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
        return view('tweet.edit', compact('tweet'));
    }

    public function store(){
        $data = request()->validate([
            'text' => 'string'
        ]);

        Tweet::create($data);

        return redirect()->route('home');
    }

    public function update(Tweet $tweet){
        $data = request()->validate([
            'text' => 'string'
        ]);

        $tweet->update($data);

        return redirect()->route('tweet.show', $tweet->id);
    }

    public function delete(Tweet $tweet){
        $tweet->deleteOrFail();

        return redirect()->route('home');
    }
}
