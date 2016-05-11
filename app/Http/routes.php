<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'index', 'uses' => 'Auth\AuthController@index']);
Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::get('dashboard', ['as' => 'dashboard.index', 'uses' => 'Backpanel\DashboardController@index']);
Route::resource('users', 'Backpanel\UserController');
Route::resource('transactions', 'Backpanel\TransactionController');
Route::get('reports', ['as' => 'reports.index', 'uses' => 'Backpanel\ReportController@index']);
