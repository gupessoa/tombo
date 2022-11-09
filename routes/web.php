<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArtistaController,
    ContatoController,
    HistoriaController,
    HomeController,
    MuseuController,
    ObraController,
    SobreController
};

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/obras', [ObraController::class, 'index'])->name('obras');
Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas');
Route::get('/museus', [MuseuController::class, 'index'])->name('museus');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/historia', [HistoriaController::class, 'index'])->name('historia');

//Route::middleware(['auth:web'])->prefix('admin')->group( function(){
Route::prefix('admin')->group( function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');
    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::resource('obras', App\Http\Controllers\Admin\ObraController::class, ['as' => 'admin']);
    Route::resource('museus', App\Http\Controllers\Admin\MuseuController::class, ['as' => 'admin']);
    Route::resource('artistas', App\Http\Controllers\Admin\ArtistaController::class, ['as' => 'admin']);
});

