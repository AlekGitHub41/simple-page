<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MenuItems;
use Illuminate\Http\Request;

class TestTailwind extends Controller
{

    public function __invoke(Request $request)
    {
        $menu_items = MenuItems::all();
        return view("content", compact("menu_items"));
    }
}
