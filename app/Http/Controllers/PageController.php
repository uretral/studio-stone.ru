<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function handle(Category $menu, $slug) {
        return view($menu->view);
    }

    public function catalog($slug) {
        return view('catalog-item',[
            'page' => Catalog::with('meta')->whereSlug($slug)->first()
        ]);
    }

    public function product($slug,$id) {
        return view('product',[
            'page' => Product::with(['meta','catalog'])->whereId($id)->first()
        ]);
    }

    public function news($slug) {
        return view('news-item',[
            'page' => News::with('meta')->whereSlug($slug)->first()
        ]);
    }

}
