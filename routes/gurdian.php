<?php

Route::middleware('is_gurdian')->namespace('Gurdian')->group(function () {
    
    Route::get('gurdian/home', 'GurdianHomeController@index')->name('gurdian.home');

    Route::get('gurdian/gettutors','GurdianHomeController@fetchAllTutors')->name('gurdian.fetchtutors');

    Route::get('gurdian/request-for-tutor','GurdianHomeController@requestTutor')->name('gurdian.requestfortutor');

    Route::post('gurdian/fetch-area','GurdianHomeController@fetchArea')->name('gurdian.fetcharea');

    Route::post('gurdian/fetch-class','GurdianHomeController@fetchClass')->name('gurdian.fetchclasses');

    Route::post('gurdian/search-tutor','GurdianHomeController@searchTutor')->name('gurdian.searchtutor');

    
    
});