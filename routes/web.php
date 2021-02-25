<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* frontend route */
Route::get('/', function () {
    return view('frontend/index');
});

Route::group(['prefix'=>'aboutus','as'=>'aboutus.'], function(){
    Route::get('/who-we-are', [App\Http\Controllers\Frontend\AboutUsController::class, 'who_we_are']);
    Route::get('/iibl-glance', [App\Http\Controllers\Frontend\AboutUsController::class, 'iibl_glance']);
    Route::get('/key-corporate', [App\Http\Controllers\Frontend\AboutUsController::class, 'key_corporate']);
    Route::get('/board-of-director', [App\Http\Controllers\Frontend\AboutUsController::class, 'board_of_director']);
});

/* backend route */
Auth::routes(['verify' => true]);
Route::get('/dashboard', [App\Http\Controllers\Backend\HomeController::class, 'dashboard'])->name('home');
Route::get('/content-dashboard', [App\Http\Controllers\Backend\HomeController::class, 'contentDashboard']);

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
  Route::group(['prefix'=>'aboutus','as'=>'aboutus.'], function(){
    Route::group(['prefix'=>'who-we-are','as'=>'who-we-are.'], function(){
        Route::get('/index', [App\Http\Controllers\Backend\WhoWeAreController::class, 'index']);
        Route::get('/list', [App\Http\Controllers\Backend\WhoWeAreController::class, 'list']);
        Route::get('/add', [App\Http\Controllers\Backend\WhoWeAreController::class, 'add']);
        Route::get('/edit', [App\Http\Controllers\Backend\WhoWeAreController::class, 'edit']);
        Route::post('/storeOrUpdate', [App\Http\Controllers\Backend\WhoWeAreController::class, 'storeOrUpdate']);
        Route::post('/delete', [App\Http\Controllers\Backend\WhoWeAreController::class, 'delete']);
    });

    Route::group(['prefix'=>'iibl-glance','as'=>'iibl-glance.'], function(){
        Route::get('/index', [App\Http\Controllers\Backend\IiblGlanceController::class, 'index']);
        Route::get('/list', [App\Http\Controllers\Backend\IiblGlanceController::class, 'list']);
        Route::get('/add', [App\Http\Controllers\Backend\IiblGlanceController::class, 'add']);
        Route::get('/edit', [App\Http\Controllers\Backend\IiblGlanceController::class, 'edit']);
        Route::post('/storeOrUpdate', [App\Http\Controllers\Backend\IiblGlanceController::class, 'storeOrUpdate']);
        Route::post('/delete', [App\Http\Controllers\Backend\IiblGlanceController::class, 'delete']);
    });

    Route::group(['prefix'=>'key-corporate','as'=>'key-corporate.'], function(){
        Route::get('/index', [App\Http\Controllers\Backend\KeyCorporateController::class, 'index']);
        Route::get('/list', [App\Http\Controllers\Backend\KeyCorporateController::class, 'list']);
        Route::get('/add', [App\Http\Controllers\Backend\KeyCorporateController::class, 'add']);
        Route::get('/edit', [App\Http\Controllers\Backend\KeyCorporateController::class, 'edit']);
        Route::post('/storeOrUpdate', [App\Http\Controllers\Backend\KeyCorporateController::class, 'storeOrUpdate']);
        Route::post('/delete', [App\Http\Controllers\Backend\KeyCorporateController::class, 'delete']);
    });
  });  
});


