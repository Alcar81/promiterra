<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function() {
    Route::resource('users', 'UsersController');
});

Route::namespace('Profile')->prefix('profile')->name('profile.')->group(function() {
    Route::resource('user', 'UsersProfileController');
});

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});




/*Route::get('/player', 'PlayerController@index')->name('player')->middleware('player');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin')->middleware('superadmin');
Route::get('/team', 'TeamController@index')->name('team')->middleware('team');
Route::get('/masterteam', 'MasterTeamController@index')->name('masterteam')->middleware('masterteam');
*/


