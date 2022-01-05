<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KatalogController;

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

Route::get('/', [KatalogController::class, 'index']);
Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Setup routing untuk admin
Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function() {
    //route Admin
});


// Setup routing untuk user
Route::group([
    'middleware' => 'user',
    'prefix' => 'user',
    'as' => 'user.'
], function () {
    //route User
});