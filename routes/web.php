<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mktabaty.pages.books.index');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin routes
Route::prefix('admin')->group(function (){

Route::resource(

    'categories','Admin\CategoryController'
    
    
);

});