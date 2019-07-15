<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UsersAdmin;

class AdminController extends Controller
{
    public function index(){
        $menu = UsersAdmin::whereNull('deleted_at')->get();
        return view('management.menu.index', compact('menu'));
    }
}
