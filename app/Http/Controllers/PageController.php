<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function handle(Category $menu, $slug) {
        return view($menu->view);
    }

}
