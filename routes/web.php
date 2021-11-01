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
    return view('index');
});

// UNDER MAINTANCE
Route::get('/undermaintanance', function () {
    return view('undermaintanance');
});

// Log In 
Route::get('/login', function () {
    return view('login');
});

Route::post('userlogin', 'LoginSignupController@Login')->name('userlogin');

// Log Out
Route::get('userlogout', 'LoginSignupController@Logout')->name('userlogout');

// Sign Up
Route::get('/signup', function () {
   return view('signup');
});
Route::post('usersignup', 'LoginSignupController@Register')->name('usersignup');

// Group Study 
Route::get('groupstudy/create','GroupStudyController@CreateGroupStudy')->name('creategroupstudy');
Route::get('groupstudy/view','GroupStudyController@ViewGroupStudy')->name('viewgroupstudy');

// Tuition 
Route::get('tuition/create','tuitionController@Createtuition')->name('createtuition');
Route::get('tuition/view','tuitionController@Viewtuition')->name('viewtuition');
Route::get('tuition/confirm','tuitionController@ConfirmTuition')->name('confirmtuition');

// Notes 
Route::get('notes','NotesController@notes')->name('notes');

// Profile Page
Route::get('personalinformation','ProfileController@Profile')->name('personalinformation');
Route::get('profile/update','ProfileController@ProfileUpdate')->name('updateprofile');