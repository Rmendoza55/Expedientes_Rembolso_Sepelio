<?php

use App\Http\Controllers\SepelioController;
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
    return view('panel.index');
});

Route::view('/panel','panel.index')->name('panel');

//Route::view('/registro_sepelios','panel.registro_sepelios')->name('registro_sepelios');

Route::resource('sepelios',SepelioController::class);

Route::view('/form_sepelios','panel.crear_sepelio')->name('crear_sepelio');
