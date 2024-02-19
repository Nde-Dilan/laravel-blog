<?php

namespace App\View\Components;

use Closure;
use App\Models\Topic;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class NavBar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $topics = Topic::query()
            ->select('title', 'slug')
            ->get();

            //DONE: Understand this query and continue with the 46 mins left
        return view('components.nav-bar',compact(['topics']));
    }
}
