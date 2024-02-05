<?php

namespace App\View\Components;

use App\Models\News;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class NewsList extends Component
{
    public Collection $newsList;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->newsList = News::whereActive(1)->orderBy('sort')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-list');
    }
}
