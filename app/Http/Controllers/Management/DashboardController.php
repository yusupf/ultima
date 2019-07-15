<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $app['menu_name'] = '';
        $app['menu_path'] = '';
        $app['child_menu_name'] = '';
        $app['child_menu_path'] = '';
        
        return view('management.dashboard', compact('app'));
    }
}
