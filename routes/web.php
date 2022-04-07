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

Route::get('/', function () {

    return view('welcome');
});

/*Route::get('/users/{name}', function ($name) {
    return $name;
})->where('name', '[A-Za-z]+');*/

Route::get('/users/{name}',  [UserController::class, 'show'])->where('name', '[A-Za-z]+');

Route::get('/usersId/{id}',  [UserController::class, 'showId'])->whereNumber('id');

Route::get('/feedbacks/{id}',  [\App\Http\Controllers\FeedbackController::class, 'show'])
    ->whereNumber('id');

Route::get('/feedbacksPublish',  [\App\Http\Controllers\FeedbackController::class, 'showPublish']);

Route::get('/countries',  [\App\Http\Controllers\CountryController::class, 'show']);

Route::get('/countriesPopulation',  [\App\Http\Controllers\CountryController::class, 'showPopulation']);




/*это по видео Стаса Бойко*/
Route::group(['prefix' => 'news'], function (){
    Route::get('/',  [\App\Http\Controllers\IndexController::class, 'index'])->name('news.index');
    Route::get('/create',  [\App\Http\Controllers\IndexController::class, 'create'])->name('news.create');
    Route::get('/edit/{id}',  [\App\Http\Controllers\IndexController::class, 'edit'])->name('news.edit')
    ->where('id', '\d+');
}
);
