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

Route::get('/', 'MainController@index')->name('myhome');


Route::get('heroe/{heroe}', 'MainController@show')->name('heroe');


Route::get('heroes','HeroeController@index')->name('heroes.index');
Route::post('heroes','HeroeController@store')->name('heroes.store');
Route::get('heroes/create','HeroeController@create')->name('heroes.create');
Route::get('heroes/{heroe}','HeroeController@show')->name('heroes.show');
Route::put('heroes/{heroe}','HeroeController@update')->name('heroes.update');
Route::delete('heroes/{heroe}','HeroeController@destroy')->name('heroes.destroy');
Route::get('heroes/{heroe}/edit','HeroeController@edit')->name('heroes.edit');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
