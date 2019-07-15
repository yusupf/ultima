<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::whereNull('deleted_at')->get();

        // dd($menu);
        return view('management.menu.index', compact('menu'));
    }
}
