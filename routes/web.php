<?php

use App\Http\Controllers\Admin\CategoryController as CategoryControllerAlias;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Mail\WelcomeMessage;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
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

Route::get('lorem', function (){

});

Route::get('', [HomeController::class, 'index']);


Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');


Route::resource("posts", CategoryController::class)
    ->only([
        'index',
        'show'
    ])
    ->parameters([
        'posts' => "post:slug"
    ])->names([
        'show' => 'posts.show',
        'index' => 'posts.index',
    ]);


Route::resource("categories", CategoryController::class)
    ->only([
        'index',
        'show'
    ])
    ->parameters([
        'categories' => "category:slug"
    ])->names([
        'show' => 'categories.show',
        'index' => 'categories.index',
    ]);



Route::group(['prefix' => 'admin'], function () {


    Route::resource("categories", CategoryControllerAlias::class)->parameters([
        'categories' => "category:slug"
    ])->names([
        'edit' => 'admin.categories.edit',
        'create' => 'admin.categories.create',
        'show' => 'admin.categories.show',
        'index' => 'admin.categories.index',
        'store' => 'admin.categories.store',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.delete'
    ]);


    Route::resource("tags", TagController::class)->parameters([
        'tags' => "tag:slug"
    ])->names([
        'edit' => 'admin.tags.edit',
        'create' => 'admin.tags.create',
        'show' => 'admin.tags.show',
        'index' => 'admin.tags.index',
        'store' => 'admin.tags.store',
        'update' => 'admin.tags.update',
        'destroy' => 'admin.tags.delete'
    ]);


    Route::resource("posts", PostController::class)->parameters([
        'post' => "post:id"
    ])->names([
        'edit' => 'admin.posts.edit',
        'create' => 'admin.posts.create',
        'show' => 'admin.posts.show',
        'index' => 'admin.posts.index',
        'store' => 'admin.posts.store',
        'update' => 'admin.posts.update',
        'destroy' => 'admin.posts.delete',
    ]);


    Route::resource("users", UserController::class)->names([
        'edit' => 'admin.users.edit',
        'create' => 'admin.users.create',
        'show' => 'admin.users.show',
        'index' => 'admin.users.index',
        'store' => 'admin.users.store',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.delete'
    ]);
});
