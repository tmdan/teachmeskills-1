<?php

use App\Http\Controllers\Admin\CategoryController;
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

});


Route::get("categories/{category:slug}", [CategoryController::class, 'show']);





//Route::resource("categories", CategoryController::class)


/**
 * Обычно, если неявно связанная модель ресурса не найдена, то генерируется 404 HTTP-ответ.
 */
//    ->missing(function (Request $request) {
//        return Redirect::route('photos.index');
//    });


//    ->parameters([
//        'categories' => 'category:slug'
//    ])


;