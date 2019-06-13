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
            Route::get('/', 'ClassesController@index');
            Route::get('/create', 'ClassesController@create');
            Route::post('store', 'ClassesController@store');
            Route::get('/show/{classes}', 'ClassesController@show');

        });

        Route::prefix('objects')->group(function () {
            Route::post('store', 'ObjectsController@store');
            Route::get('/', 'ObjectsController@index');
            Route::get('/create', 'ObjectsController@create');
            Route::get('/show/{objects}', 'ObjectsController@show');
        });

        Route::prefix('teachers')->group(function () {
            Route::get('/', 'TeachersController@index');
            Route::get('/create', 'TeachersController@create');
            Route::get('/show/{teachers}', 'TeachersController@show');
            Route::post('store', 'TeachersController@store');
        });

        Route::prefix('students')->group(function () {
            Route::get('/', 'StudentsController@index');
            Route::get('/create', 'StudentsController@create');
            Route::post('store', 'StudentsController@store');
            Route::get('/show/{students}', 'StudentsController@show');
        });

        Route::prefix('notes')->group(function () {
            Route::post('store', 'NotesController@store');
            Route::get('/', 'NotesController@index');
        });
    });
});

