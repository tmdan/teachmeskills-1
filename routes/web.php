<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
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
Route::get('/posts/{name}', [UserController::class, 'index'])
    ->whereAlpha('name');

Route::get('/posts/{id}', [UserController::class, 'feedback'])
    ->whereNumber('id');


Route::group(['prefix'=> '/feedbacks'], function (){
    Route::get('/published', [FeedbackController::class, 'show']);

    Route::get('/{id}', [FeedbackController::class, 'userFeedbacks'])
        ->whereNumber('id');
} );

