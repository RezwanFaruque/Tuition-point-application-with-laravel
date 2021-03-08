<?php

Route::middleware('is_admin')->namespace('Admin')->group(function () {
    
    // admin home route
    Route::get('/admin/home','AdminHomeController@index')->name('admin.home');

    Route::get('/admin/tutors/all','AdminTutorController@fetchAllTutors')->name('admin.fetchalltutors');

    Route::get('admin/tutor/{id}','AdminTutorController@fetchSingleTutor')->name('admin.fetchsingletutor');

    Route::get('admin/all-service-district','AdminHomeController@allServiceDistrict')->name('admin.tutorservicedistrict');

    Route::get('admin/add-service-district','AdminHomeController@addserviceDistrictView')->name('admin.addservicedistrictview');

    Route::post('admin/add-service-district','AdminHomeController@addServiceDistrict')->name('admin.addservicedistrict');

    Route::delete('admin/district/delete/{id}','AdminHomeController@deleteDistrict')->name('admin.deleteservicedistrict');

    Route::get('admin/add-service-area','AdminHomeController@addServiceAreaView')->name('admin.serviceareaview');

    Route::post('admin/save-service-area','AdminHomeController@saveServiceArea')->name('admin.saveservicearea');

    // Route::get('admin/all-mediums','AdminHomeController@allMediums')->name('admin.mediums');

    Route::get('admin/all-tutions','AdminHomeController@allTutions')->name('admin.alltutions');

    Route::get('admin/add-tutions','AdminHomeController@addTuionsView')->name('admin.addtutionsview');

    Route::post('admin/save-tutions','AdminHomeController@saveTutions')->name('admin.savetutions');
});


