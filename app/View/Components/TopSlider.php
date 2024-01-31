<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class TopSlider extends Component
{

    public Collection $slides;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->slides = \App\Models\TopSlider::whereActive(1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.top-slider');
    }
}
