<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/posts/{post:slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/tags/{tag:slug}', [\App\Http\Controllers\HomeController::class, 'tag'])->name('tag.show');
Route::get('/categories/{category:slug}', [\App\Http\Controllers\HomeController::class, 'category'])
    ->name('category.show');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class)->parameters([
        'categories' => 'category:slug'
    ])->names([
        'edit' => 'admin.categories.edit',
        'create' => 'admin.categories.create',
        'show' => 'admin.categories.show',
        'index' => 'admin.categories.index',
        'store' => 'admin.categories.store',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.delete'
    ]);

    Route::resource('tags', \App\Http\Controllers\Admin\TagController::class)->parameters([
        'tags' => 'tag:slug'
    ])->names([
        'edit' => 'admin.tags.edit',
        'create' => 'admin.tags.create',
        'show' => 'admin.tags.show',
        'index' => 'admin.tags.index',
        'store' => 'admin.tags.store',
        'update' => 'admin.tags.update',
        'destroy' => 'admin.tags.delete'
    ]);

    Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->names([
        'edit' => 'admin.users.edit',
        'create' => 'admin.users.create',
        'show' => 'admin.users.show',
        'index' => 'admin.users.index',
        'store' => 'admin.users.store',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.delete'
    ]);

    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class)->names([
        'edit' => 'admin.posts.edit',
        'create' => 'admin.posts.create',
        'show' => 'admin.posts.show',
        'index' => 'admin.posts.index',
        'store' => 'admin.posts.store',
        'update' => 'admin.posts.update',
        'destroy' => 'admin.posts.delete'
    ]);
});
