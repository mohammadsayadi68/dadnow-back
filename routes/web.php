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


Route::prefix('/admin')->middleware('auth')->name('admin')->group( function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('');
    Route::prefix('/news')->name('_news')->group( function(){

        Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('');
        Route::get('/create', [App\Http\Controllers\NewsController::class, 'create'])->name('_create');
        Route::post('/store', [App\Http\Controllers\NewsController::class, 'store'])->name('_store');
    });

});
