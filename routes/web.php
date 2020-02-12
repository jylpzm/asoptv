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


Route::group(['middleware' => ['revalidate']], function(){


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
Route::get('/submit', 'SubmissionsController@submit')->name('submission');
Route::get('/submissions', 'SubmissionsController@index')->name('entries');
//submiting song
Route::post('/submit_form', 'SongsController@submitsong');

//captcha
Route::get('createcaptcha', 'CaptchaController@create');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'SongsController@refreshCaptcha');

//**** ADMIN SDE ****//
//
//Admin Dashboard
Route::get('/admin_dashboard', 'admin\AdminController@index')->name('AdminDashboard');

//Manage Administrators Dashboard
Route::get('/manage_admins', 'admin\AdminController@indexManageAdmins')->name('ManageAdmins');

//New Administrator Dashboard
Route::get('/add_admin', 'admin\AdminController@indexCreateNewAdmin')->name('AddAdministrator');

//Create New Administrator
Route::post('/create_new_admin', 'admin\AdminController@createAdmin')->name('CreateAdministrator');

//Manage Songwriters Dashboard
Route::get('/manage_songwriters', 'admin\AdminController@indexManageSongwriters')->name('ManageSongwriters');

//Manage Song Entries Dashbaord
Route::get('/manage_song_entries', 'admin\AdminController@indexManageSongEntries')->name('ManageSongEntries');



});