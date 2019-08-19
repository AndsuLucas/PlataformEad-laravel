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

/*home*/

Route::get('/', 'HomeController@index')->name('home');

/*endhome*/

/*profile*/

Route::get('/profile/{user}', 'UserController@userProfile' )->where('user', '[0-9]+');
Route::get('/profile/register', 'UserController@returnCreateUserProfileForm');
Route::post('/profile/create', 'UserController@createUserProfile');
/*endprofile*/
