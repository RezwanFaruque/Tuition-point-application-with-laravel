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

    
    Route::get('admin/edit-save-tution/{id}','AdminHomeController@editSaveTution')->name('admin.editsavetution');

    Route::delete('admin/delete-tution/{id}','AdminHomeController@deleteTution')->name('admin.deletetution');

    Route::post('admin/tutions/update/{id}','AdminHomeController@updateTution')->name('admin.updatetutions');


    // request tutor section
    Route::get('admin/all-request-tutorlist','AdminHomeController@getRequestTutorList')->name('admin.getrequesttutorlist');

    Route::get('admin/request-tutorlist/{id}','AdminHomeController@viewRequestTutor')->name('admin.viewrequesttuor');

    Route::delete('admin/delete-requesttutor/{id}','AdminHomeController@deleteRequestTutor')->name('admin.deleterequesttutor');


    Route::get('admin/create-tutor-user','AdminHomeController@viewCreateTutor')->name('admin.viewcreatetutor');

    Route::post('admin/save-tutor-user','AdminHomeController@saveTuotor')->name('admin.savetutor');


    Route::get('admin/premium-tutor-request','AdminHomeController@fetchRequestedPremiumTutor')->name('admin.allpremiumrequesttutors');

    Route::get('admin/premium-tutor-request/{id}','AdminHomeController@detailsRequestPremiumTutor')->name('admin.viewrequestpremiumtutor');

    Route::post('admin/accept-request-premium-tutor/{id}','AdminHomeController@acceptRequestForPremiumTotor')->name('admin.acceptrequestpremium');

});


