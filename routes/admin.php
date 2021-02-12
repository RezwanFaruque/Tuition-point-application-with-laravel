<?php

Route::middleware('is_admin')->namespace('Admin')->group(function () {
    
    // admin home route
    Route::get('/admin/home','AdminHomeController@index')->name('admin.home');
});


