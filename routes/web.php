<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');

Route::prefix('/app')->group(function() {
    Route::get('/home', [HomeController::class, 'home'])->name('app.home');
    Route::resource('produto', 'App\Http\Controllers\ProdutoController');
    Route::resource('tag', 'App\Http\Controllers\TagController');
});