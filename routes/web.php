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
Route::post('/profilepicture', 'ProfilesController@editprofilePic')->name('changeDP');

//change pass
Route::post('/settings','ProfilesController@changePassword')->name('changePassword');


//Get Region
Route::get('/register','GetRegionController@getRegion')->name('register');
Route::get('/getStates/{id}','GetRegionController@getStates');
Route::get('/getCities/{id}','GetRegionController@getCities');


//register
Route::post('profile', 'ProfilesController@changeprofile')->name('changeprofile');
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

//submission
Route::get('/submit', 'SubmissionsController@index')->name('submission');
Route::get('/submissions', 'SubmissionsController@submissionhistory')->name('subhistory');

//submiting song
Route::post('/submit_form', 'SongsController@submitsong');
