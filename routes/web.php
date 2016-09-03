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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/match', 'HomeController@match')->name('match');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::group(['prefix' => 'auth'], function(){
    Route::get('/login','AuthController@index')->name('login');
    Route::post('/login','AuthController@login');
    Route::get('/signup', 'AuthController@signup')->name('signup');
    Route::post('/signup', 'AuthController@register');
    Route::get('/logout', 'AuthController@logout')->name('logout');
});

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('/','DashboardController@index')->name('dashboard');

});

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function() {
    Route::get('/', 'AdminDashboardController@index');
    Route::get('/dashboard', 'AdminDashboardController@index');
});

Route::group(['prefix' => 'admin/team', 'namespace' => 'admin'], function() {
    Route::get('/', 'TeamController@index');
    Route::get('/register', 'TeamController@register');
});

Route::group(['prefix' => 'admin/schedule', 'namespace' => 'admin'], function() {
    Route::get('/', 'ScheduleController@index');
    Route::get('/edit/{id}', 'ScheduleController@edit');
    Route::get('/register', 'ScheduleController@register');
    Route::post('/register', 'ScheduleController@saveSchedule');
    Route::post('/match/save/{id?}', 'ScheduleController@saveMatch');
});

Route::group(['prefix' => 'admin/account', 'namespace' => 'admin'], function() {
    Route::get('/', 'AccountController@index');
});


Route::group(['prefix' => 'client', 'namespace' =>'client'], function(){
    Route::get('/', 'ClientController@index');
    Route::get('/team', 'ClientTeamController@index');
    Route::get('/match','ClientMatchController@index');
    Route::get('/result', 'ClientResultController@index');
    Route::get('/betting', 'ClientBettingController@index');
});


Route::get('/testing',function(){
    return view('client.betting');
});