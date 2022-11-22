<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{Admin\AdminAuthController,
    ArtistaController,
    ContatoController,
    HistoriaController,
    HomeController,
    MuseuController,
    ObraController,
    SobreController};

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/obras', [ObraController::class, 'index'])->name('obras');
Route::get('/artistas', [ArtistaController::class, 'index'])->name('artistas');
Route::get('/museus', [MuseuController::class, 'index'])->name('museus');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/historia', [HistoriaController::class, 'index'])->name('historia');


//Route::group( ['middleware' => 'auth', 'prefix' => 'admin'],function(){
//Route::prefix('admin')->group( function(){
Route::group(['prefix' => 'admin'], function () {
    //auth
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');
        Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
        Route::resource('obras', App\Http\Controllers\Admin\ObraController::class, ['as' => 'admin']);
        Route::resource('museus', App\Http\Controllers\Admin\MuseuController::class, ['as' => 'admin']);
        Route::resource('artistas', App\Http\Controllers\Admin\ArtistaController::class, ['as' => 'admin']);
        Route::resource('grupos', App\Http\Controllers\Admin\GrupoController::class, ['as' => 'admin']);
        Route::resource('geolocals', App\Http\Controllers\Admin\GeolocalController::class, ['as' => 'admin']);
        Route::resource('eras', App\Http\Controllers\Admin\EraController::class, ['as' => 'admin']);
        Route::resource('movimentos', App\Http\Controllers\Admin\MovimentoController::class, ['as' => 'admin']);
        Route::get('/pages/{id}', [App\Http\Controllers\Admin\PageController::class, 'index'])->name('admin.pages.index');
    });
});

