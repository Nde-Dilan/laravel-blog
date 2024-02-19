<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class SideBar extends Component
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
        $categories = Category::query()
            ->join('category_posts', 'categories.id', '=', 'category_posts.category_id')
            ->join('posts', 'category_posts.post_id', '=', 'posts.id')
            ->select('categories.title', 'categories.slug', DB::raw('count(*) as total'))
            ->where('posts.active', true)
            ->groupBy('categories.id')
            ->orderByDesc('total')
            ->get();

            //DONE: Understand this query and continue with the 46 mins left
        return view('components.side-bar',compact(['categories']));
    }
}
