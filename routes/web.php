<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/contacto', [App\Http\Controllers\ContactoController::class, 'index'])->name('contacto.index');
Route::get('/contacto/todosloscontactos', [App\Http\Controllers\ContactosAdminController::class, 'index'])->name('contactoAdmin.index');
Route::post('/contacto', [App\Http\Controllers\ContactoController::class, 'store'])->name('contacto.store');
Route::get('/contacto', 'ContactoController@create')->name('contacto.create');