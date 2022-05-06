<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Models\User;
use App\Notifications\TestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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


Route::get('lorem', function(){


    User::first()->notify(new TestNotification);

});


Route::group(['prefix' => 'admin'], function () {

    Route::resource("categories", CategoryController::class)
        ->parameters([
            'categories' => 'category:slug'
        ])
        ->names([
            'edit' => 'admin.categories.edit',
            'create' => 'admin.categories.create',
            'show' => 'admin.categories.show',
            'index' => 'admin.categories.index',
            'store' => 'admin.categories.store',
            'update' => 'admin.categories.update',
            'destroy' => 'admin.categories.delete'
        ]);


});
