<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tweet extends Component
{
    public $tweet;
    /**
     * Create a new component instance.
     */
    public function __construct($tweet)
    {
        $this->tweet = $tweet;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tweet');
    }
}
