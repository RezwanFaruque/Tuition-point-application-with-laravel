<?php

Route::middleware('is_tutor')->namespace('Tutor')->group(function () {
    
    Route::get('tutor/home', 'TutorHomeController@index')->name('tutor.home');

    Route::get('tutor/home/{id}','TutorHomeController@editProfile')->name('tutor.editprofile');

    
});