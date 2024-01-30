<?php

namespace App\View\Components;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Entity;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Header extends Component
{
    public Collection $menu;
    public Collection $catalog;
    public string $phone;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menu = Category::whereType(1)->orderBy('order')->get();
        $this->catalog = Catalog::whereActive(1)->orderBy('sort')->get();
        $this->phone = Entity::whereName('phone')->first()?->getAttribute('value') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
