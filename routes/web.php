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
Route::post('groupstudy/insert','GroupStudyController@InsertGroupStudy')->name('insert');
Route::get('groupstudy/view','GroupStudyController@ViewGroupStudy')->name('viewgroupstudy');
Route::post('groupstudy/enrollgroupstudy','GroupStudyController@EnrollGroupStudy')->name('enrollgroupstudy');

// Tuition 
Route::get('tuition/create','TuitionController@CreateTuition')->name('createtuition');
Route::post('tuition/insert','TuitionController@InsertTuition')->name('insert');
Route::get('tuition/view','TuitionController@ViewTuition')->name('viewtuition');
Route::post('tuition/filter','TuitionController@FilterTuition')->name('filter');
Route::post('tuition/enrollpost','TuitionController@EnrollTuition')->name('enrollpost');
Route::get('tuition/confirm','TuitionController@ConfirmTuition')->name('confirmtuition');
Route::post('tuition/submitbutton','TuitionController@SubmitButton')->name('submitbutton');


// Notes 
Route::get('notes','NotesController@notes')->name('notes');

// Profile Page
Route::get('personalinformation','ProfileController@Profile')->name('personalinformation');
Route::get('profile/update','ProfileController@ProfileUpdateView')->name('updateprofile');
Route::post('profile/updateuser','ProfileController@Updateprofile')->name('updateprofile');
Route::get('profile/requestedpost','ProfileController@RequestedPost')->name('requestedpost');
Route::get('profile/appoint','ProfileController@Appoint')->name('appoint');
Route::post('profile/enrollappoint','ProfileController@EnrollAppoint')->name('enrollappoint');
Route::get('profile/astutor','ProfileController@AsTutor')->name('astutor');

// Requested Post
// Route::get('/requestedpost', function () {
//     return view('requestedpost');
// });