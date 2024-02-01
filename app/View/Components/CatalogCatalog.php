<?php

namespace App\View\Components;

use App\Models\Catalog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class CatalogCatalog extends Component
{

    public Collection $catalog;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->catalog = Catalog::whereActive(1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catalog-catalog');
    }
}
