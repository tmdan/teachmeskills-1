<?php

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

Route::get('/{name}', [UserController::class, "show"])->whereAlpha("name");
Route::get("/usersId/{id}", [UserController::class, "showId"])->whereNumber("id");
Route::get("/feedbacks/{id}", [\App\Http\Controllers\FeedbackController::class, "show"])->whereNumber("id");
Route::get('/feedbacksPublish',  [\App\Http\Controllers\FeedbackController::class, 'showPublish']);
Route::get('/', function () {
    return view('welcome');
});
