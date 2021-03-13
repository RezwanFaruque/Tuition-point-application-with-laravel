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

Route::get('/', 'HomeController@welcome')->name('index.home');






Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('guest')->namespace('Guest')->group(function () {

    Route::get('/tutors', 'GuestUserController@fetchAllTutors')->name('guest.fetchalltutors');

    Route::get('/request-for-tutors', 'GuestUserController@requestForTutor')->name('guest.requestfortutor');

    Route::post('/request-for-tutors', 'GuestUserController@saveRequestForTutor')->name('guest.saverequestfortutors');

    Route::post('/fetch-area', 'GuestUserController@fetchArea')->name('guest.fetcharea');

    Route::post('/fetch-classes', 'GuestUserController@fetchClasses')->name('guest.fetchclasses');

    Route::post('/search-tutor', 'GuestUserController@searchTutor')->name('guest.searchTutor');

    Route::get('/about-us', 'GuestUserController@aboutUs')->name('guest.aboutus');

    Route::get('/faq', 'GuestUserController@faq')->name('guest.faq');


    Route::get('singletutor/{tutorid}', 'GuestUserController@tutorProfilePublicView')->name('guest.tutorprofilepublicview');

    Route::get('/active-tutions','GuestUserController@activeTutions')->name('guest.activetutions');

    Route::get('active-tutions/{id}','GuestUserController@singleActiveTution')->name('guest.singleactivetution');

    Route::get('/premium-tutor','GuestUserController@getPremiumTutor')->name('guest.premium-tutor');
});
