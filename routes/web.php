<?php

use App\Services\Weather\Interfaces\WeatherServiceContract;
use Illuminate\Support\Facades\Auth;
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

//Auth::routes(['verify' => true]);

Route::get('/weather', function () {

    //dd(\App\Facade\Weather::generalInformation()->getNameCity());
    return view('weather.index');


    //WeatherServiceContract $weatherService
    //return view('weather.index', ['weatherService' => $weatherService]);

});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/posts/{post:slug}', [\App\Http\Controllers\HomeController::class, 'show'])->name('post.show');
Route::get('/tags/{tag:slug}', [\App\Http\Controllers\HomeController::class, 'tag'])->name('tag.show');
Route::get('/categories/{category:slug}', [\App\Http\Controllers\HomeController::class, 'category'])
    ->name('category.show');
Route::post('/subscribe', [\App\Http\Controllers\Frontend\SubscribeController::class, 'subscribe'])
    ->name('subscribe');
Route::get('verification/{token}', [\App\Http\Controllers\Frontend\SubscribeController::class, 'verification']);

// здесь только доступ для тех пользователей, которые прошли аутентификацию и авторизацию
Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [\App\Http\Controllers\Frontend\ProfileController::class, 'index']);
    Route::post('/profile', [\App\Http\Controllers\Frontend\ProfileController::class, 'store'])->name('profile');
    Route::post('/comment', [\App\Http\Controllers\CommentController::class, 'store'])->name('comment');
});

// страницы, доступные для гостей
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'registerForm'])->name('registerForm');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('loginForm');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('adminpanel');

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

    Route::get('/comments', [\App\Http\Controllers\Admin\CommentController::class, 'index'])
        ->name('admin.comments.index');
    Route::get('/comments/toggle/{id}', [\App\Http\Controllers\Admin\CommentController::class, 'toggle']);
    Route::delete('/comments/{id}', [\App\Http\Controllers\Admin\CommentController::class, 'destroy'])
        ->name('admin.comments.delete');

    Route::resource('subscriptions', \App\Http\Controllers\Admin\SubscriptionController::class)->names([
        'index' => 'admin.subscriptions.index',
        'create' => 'admin.subscriptions.create',
        'store' => 'admin.subscriptions.store',
        'destroy' => 'admin.subscriptions.delete',
        'edit' => 'admin.subscriptions.edit',
        'show' => 'admin.subscriptions.show',
        'update' => 'admin.subscriptions.update',
    ]);


});
