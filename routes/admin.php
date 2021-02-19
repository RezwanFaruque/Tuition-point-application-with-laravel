<?php

Route::middleware('is_admin')->namespace('Admin')->group(function () {
    
    // admin home route
    Route::get('/admin/home','AdminHomeController@index')->name('admin.home');

    Route::get('/admin/tutors/all','AdminTutorController@fetchAllTutors')->name('admin.fetchalltutors');

    Route::get('admin/tutor/{id}','AdminTutorController@fetchSingleTutor')->name('admin.fetchsingletutor');
});


