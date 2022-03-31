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

Route::get('/user/{name}', [UserController::class, 'show'])->whereAlpha('name');
Route::get('/feedbacks', [FeedbackController::class, 'show']);
Route::get('/feedbacksOfUserOne', [FeedbackController::class, 'showFeedbacksOfUserOne']);
Route::get('/user/{id}', [UserController::class, 'showFeedbacks'])->whereNumber('id');
