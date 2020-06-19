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
    return redirect()->route('admin.dashboard');
});

Route::get('login','LoginController@showFormLogin')->name('login');
Route::post('login','LoginController@login')->name('users.login');

Route::middleware(['auth', 'checkAge'])->prefix('admin')->group(function (){
    Route::get('/', function () {
        return view('admin.master');
    })->name('admin.dashboard');

    Route::get('logout','LoginController@logout')->name('logout');

    Route::prefix('users')->group(function (){
        Route::get('/', 'UserController@index')->name('users.index');
        Route::get('/create', 'UserController@create')->name('users.create');
        Route::post('/create', 'UserController@store')->name('users.store');
        Route::get('/{id}/delete', 'UserController@delete')->name('users.delete');

        Route::get('calculator-age', 'UserController@calculatorAge')->name('users.calculator');
    });

});

