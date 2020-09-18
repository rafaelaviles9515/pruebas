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

Route::get('/home', 'HomeController@index')->name('home');

//rutas para sector
Route:: get('/sector', 'SectorController@index')->name('sector.index');
Route::get('/sector/crear','SectorController@create')->name('sector.create');
Route::post('/sector', 'SectorController@store')->name('sector.store');

//formato para excel
Route::get('user-list-excel', 'UserController@exportExcel')->name('users.excel');
Route::post('import-list-excel', 'UserController@importExcel')->name('users.import.excel');

//vista para un index
Route::get('/index', function () {
    return view('base.index');
})->name('index');
//Route::view('/gestion','gestion.index')->name('gestion.index');