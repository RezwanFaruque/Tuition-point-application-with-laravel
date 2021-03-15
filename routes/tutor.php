<?php

Route::middleware('is_tutor')->namespace('Tutor')->group(function () {

    Route::get('tutor/home', 'TutorHomeController@index')->name('tutor.home');

    Route::get('tutor/home/{id}','TutorHomeController@editProfile')->name('tutor.editprofile');

    Route::get('/tutor/about-us','TutorHomeController@aboutUs')->name('tutor.aboutus');

    Route::get('/tutor/faq','TutorHomeController@faq')->name('tutor.faq');

    Route::get('/tutor/active-tutions','TutorHomeController@activeTutions')->name('tutor.activetutions');

    Route::get('/tutor/active-tution/{id}','TutorHomeController@singleTutionView')->name('tutor.singletutorview');

    Route::post('/tutor/apply-active-tution','TutorHomeController@applyForActiveTution')->name('tutor.applyforactivetution');

    Route::post('tutor/update-profile','TutorHomeController@updateProfile')->name('tutor.updateprofile');

    
});