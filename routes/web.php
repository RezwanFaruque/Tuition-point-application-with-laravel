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

Route::middleware('guest')->namespace('Guest')->group(function () {

    Route::get('/tutors','GuestUserController@fetchAllTutors')->name('guest.fetchalltutors');

    Route::get('/request-for-tutors','GuestUserController@requestForTutor')->name('guest.requestfortutor');

    Route::post('/fetch-area','GuestUserController@fetchArea')->name('guest.fetcharea');

    Route::post('/fetch-classes','GuestUserController@fetchClasses')->name('guest.fetchclasses');

    Route::post('/search-tutor','GuestUserController@searchTutor')->name('guest.searchTutor');

});



Route::get('/','HomeController@welcome')->name('index.home');

    
    




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');





