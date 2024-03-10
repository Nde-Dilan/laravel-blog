<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{

     /**
     * Create a new component instance., so if we want to pass data to the layout, we can do so by passing it to the component.
     */
    public function __construct(public ?string $metaTitle=null, public ?string $metaDescription=null, public ?string $metaKeywords=null)
    {
        //
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
