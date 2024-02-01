<?php

namespace App\View\Components;

use App\Models\Catalog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class CatalogIndex extends Component
{

    public Collection $groups;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->groups = Catalog::whereActive(1)->get()->split(3);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catalog-index');
    }
}
