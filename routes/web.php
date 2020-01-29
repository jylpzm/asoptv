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


//register
Route::post('profile', 'ProfilesController@changeprofile')->name('changeprofile');
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

//submission
Route::get('/submit', 'SubmissionsController@index')->name('submission');
Route::get('/submissions', 'SubmissionsController@entries')->name('entries');
//submiting song
Route::post('/submit_form', 'SongsController@submitsong');

//captcha
Route::get('createcaptcha', 'CaptchaController@create');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'SongsController@refreshCaptcha');

//Admin Dashboard
Route::get('/admin', 'admin\AdminController@index')->name('AdminDashboard');

//Manage Administrators
Route::get('/manage_admins', 'admin\AdminController@indexManageAdmins')->name('ManageAdmins');

//Create New Administrator
Route::get('/create_admin', 'admin\AdminController@indexCreateNewAdmin')->name('CreateNewAdmin');

//Manage Songwriters
Route::get('/manage_songwriters', 'admin\AdminController@indexManageSongwriters')->name('ManageSongwriters');

//Manage Song Entries
Route::get('/manage_song_entries', 'admin\AdminController@indexManageSongEntries')->name('ManageSongEntries');