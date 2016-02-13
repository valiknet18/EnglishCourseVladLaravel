<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function () {
        Route::get('/login', 'Admin\HomeController@loginAction');
        Route::post('/authenticate', 'Admin\HomeController@authenticateAction');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
        Route::get('/', 'Admin\HomeController@dashboardAction');

        Route::group(['prefix' => 'courses'], function () {
            Route::get('/', 'Admin\CoursesController@indexAction');
            Route::get('/create', 'Admin\CoursesController@createAction');
            Route::post('/create', 'Admin\CoursesController@storeAction');
            Route::get('/{course}', 'Admin\CoursesController@itemAction');
        });
    });
});

