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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
 \UniSharp\LaravelFilemanager\Lfm::routes();
 });


Route::prefix('/admin')->middleware('auth')->middleware('checkadmin')->name('admin')->group( function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('');
        Route::prefix('/news')->name('_news')->group( function(){
        Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('');
        Route::get('/create', [App\Http\Controllers\NewsController::class, 'create'])->name('_create');
        Route::post('/store', [App\Http\Controllers\NewsController::class, 'store'])->name('_store');
        Route::get('/edit/{news}', [App\Http\Controllers\NewsController::class, 'edit'])->name('_edit');

        Route::get('/status/{id}', [App\Http\Controllers\NewsController::class, 'status'])->name('_status');
        Route::post('/update/{news}', [App\Http\Controllers\NewsController::class, 'update'])->name('_update');


    });
    Route::prefix('/podcast')->name('_podcast')->group( function(){
        Route::get('/', [App\Http\Controllers\PodcastController::class, 'index'])->name('');
        Route::get('/create', [App\Http\Controllers\PodcastController::class, 'create'])->name('_create');
        Route::post('/store', [App\Http\Controllers\PodcastController::class, 'store'])->name('_store');
        Route::get('/status/{id}', [App\Http\Controllers\PodcastController::class, 'status'])->name('_status');
        Route::get('/edit/{podcast}', [App\Http\Controllers\PodcastController::class, 'edit'])->name('_edit');
        Route::post('/update/{podcast}', [App\Http\Controllers\PodcastController::class, 'update'])->name('_update');

    });

});