<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [DashboardController::class, 'index']);

    Route::resource('categories',CategoryController::class)
        ->parameters([
            'categories' => 'category:slug'
        ]);
    Route::resource('tags', TagController::class)
        ->parameters([
            'tags' => 'tag:slug'
        ]);
    Route::resource('users', UserController::class);

    Route::resource('posts', PostController::class);
});

//Route::resource('/admin/posts',PostController::class);