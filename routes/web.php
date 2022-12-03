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

// LANDING -----------------------------------------------------------------

Route::get('/', 'HomeController@index');

Route::get('/signin', 'AuthController@getLogin')->name('signin');
Route::post('/postLogin', 'AuthController@postLogin');

Route::group(['middleware' => ['auth']], function () {

    // Route member setelah login
    Route::get('/member', 'HomeController@member');
    Route::get('/listmember', 'HomeController@listmember');

    // Route Admin
    Route::get('/admin', 'AdminController@dashboard');

    // Route Utk Admin - ManageMember
    Route::get('/managemember', 'AdminController@index');
    Route::post('/add/member', 'AdminController@store');
    Route::get('/delete/member/{id}', 'AdminController@destroy');
    Route::post('/update/member/{id}', 'AdminController@update');

    // Route Utk Admin - Merchandise
    Route::get('/merch', 'MerchandiseController@index');
    Route::post('/add/merchandise', 'MerchandiseController@store');
    Route::get('/delete/merchandise/{id}', 'MerchandiseController@destroy');
    Route::post('/edit/merchandise/{id}', 'MerchandiseController@update');

});

Route::get('/logout', 'AuthController@logout');


