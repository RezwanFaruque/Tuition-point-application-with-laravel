<?php

Route::middleware('is_gurdian')->namespace('Gurdian')->group(function () {
    
    Route::get('gurdian/home', 'GurdianHomeController@index')->name('gurdian.home');
});