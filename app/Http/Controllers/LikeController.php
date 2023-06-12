<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggleLike(Tweet $tweet){
        if(!Auth::check()){
            return response('Only authorized users can like', 401);
        }

        $existingLike = Like::where([
            'user_id' => Auth::id(),
            'tweet_id' => $tweet->id
        ])->get();

        if($existingLike->count() === 0){
            //if no like on this tweet from this user
            $like = new Like();
            $like->tweet()->associate($tweet);
            $like->user()->associate(Auth::user());
            $like->save();

            return $tweet->likes()->count();
        }else{
            //if like exists
            $existingLike->first()->delete();

            return $tweet->likes()->count();
        }

    }
}
