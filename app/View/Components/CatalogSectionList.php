<?php

namespace App\View\Components;

use App\Models\Catalog;
use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\View\Component;

class CatalogSectionList extends Component
{
    public int $section;
    public  $products;
    public string $path;
    const PAGE = 'PAGEN_1';

    /**
     * Create a new component instance.
     */
    public function __construct(int $section)
    {
        $this->path = request()->path();
        $this->section = $section;
        $this->products = Product::whereParentId($this->section)->paginate(
            perPage: 16,
            page: request()->has(self::PAGE) && request(self::PAGE) > 1 ? request(self::PAGE) : 1
        );
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catalog-section-list');
    }
}
