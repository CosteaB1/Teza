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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware(['middleware' => 'isAdmin'])->group(function () {
Route::get('/home', 'HomeController@index')->name('home');
    Route::post('create', 'UserController@createUser');

    Route::prefix('admin')->group(function () {

        Route::prefix('classes')->group(function () {
            Route::post('store', 'ClassesController@store');
            Route::get('/', 'ClassesController@index');
            Route::get('/', 'ClassesController@index');
        });

        Route::prefix('objects')->group(function () {
            Route::post('store', 'ObjectsController@store');
            Route::get('/', 'ObjectsController@index');
        });

        Route::prefix('teachers')->group(function () {
            Route::post('store', 'TeachersController@store');
            Route::get('/', 'TeachersController@index');
        });

        Route::prefix('students')->group(function () {
            Route::post('store', 'StudentsController@store');
            Route::get('/', 'StudentsController@index');
        });

        Route::prefix('notes')->group(function () {
            Route::post('store', 'NotesController@store');
            Route::get('/', 'NotesController@index');
        });
    });
});

