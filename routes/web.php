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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'HomeController@index')->name('home');
Route::get('/achat', 'HomeController@achat')->name('achat');
Route::get('/contact', 'HomeController@contact')->name('contact');
// Route::get('/product/{id}', 'ProductController@detai')->name('contact');
Route::resource('product', 'ProductController');


// Route::group(['prefix' => 'user'], function () {
//     Voyager::routes();
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
