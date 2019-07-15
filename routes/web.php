<?php

use Illuminate\Support\Facades\Cache;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('lang/en', function () {

 Cache::put('lang', 'en', 60);

 return redirect(url(''));
    // return redired('front.homepage');
});

Route::get('lang/id', function () {
//  redirect(URL::previous());
 Cache::put('lang', 'id', 60);
 return redirect(url(''));
    // return Cookie::make('langs', 'id', 60);
    // return view('front.homepage');
});

Route::get('/', function () {
    return view('front.homepage');
});
Route::get('access_denied', function () {
    return 'Ops sorry access denied!!!';
});


Route::get('take', 'Front\TakeController@index');
Route::post('take', 'Front\TakeController@takePost');

Route::get('login_admin', 'Management\AuthController@index');
Route::post('login_admin', 'Management\AuthController@loginPost');
Route::get('register_admin', 'Management\AuthController@registerPost');
Route::get('logout_admin', 'Management\AuthController@logout_admin');

Route::prefix('/management')->middleware(['cek.role:admin'])->group(function () {
    Route::get('dashboard', 'Management\DashboardController@index');


    // Menu
    Route::prefix('/menu')->group(function () {
        Route::get('', 'Management\MenuController@index');
    });

     // Admin
     Route::prefix('/admin')->group(function () {
        Route::get('', 'Management\AdminController@index');
    });

     // Users
     Route::prefix('/users')->group(function () {
        Route::get('', 'Management\UsersController@index');
    });

     // Question
     Route::prefix('/question')->group(function () {
        Route::get('', 'Management\QuestionController@index');
        Route::get('new', 'Management\QuestionController@new');
        Route::post('new', 'Management\QuestionController@newPost');
        Route::get('edit', 'Management\QuestionController@edit');
        Route::post('edit', 'Management\QuestionController@editPost');
    });

    // Language
    Route::prefix('/language')->group(function () {
        Route::get('', 'Management\LanguageController@index');
        Route::post('update', 'Management\LanguageController@update');
    });

    // Product
    Route::prefix('/product')->group(function () {
        Route::get('', 'Management\ProductController@index');
        Route::get('new', 'Management\ProductController@new');
        Route::post('new', 'Management\ProductController@newPost');
        Route::get('view/{id}', 'Management\ProductController@view');
        Route::get('edit/{id}', 'Management\ProductController@edit');
        Route::post('edit/{id}', 'Management\ProductController@editPost');
    });





});