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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



//profile settings
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfilesController@profile')->name('profile');
Route::get('/settings', 'ProfilesController@settings')->name('settings');
//edit profile
Route::post('/updateprofile/{id}', 'ProfilesController@editprofile');

//change pass
Route::post('/settings','ProfilesController@changePassword')->name('changePassword');


//Get Region
Route::get('/profile','GetRegionController@getRegion')->name('profile');
Route::get('/getStates/{id}','GetRegionController@getStates');
Route::get('/getCities/{id}','GetRegionController@getCities');


//register
Route::post('/register', 'GetRegionController@index');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

//submission
Route::get('/submit', 'SubmissionsController@index')->name('submission');
Route::get('/submissions', 'SubmissionsController@submissionhistory')->name('subhistory');

//submiting song
Route::post('/submit_form', 'SongsController@submitsong');

