<?php

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', 'Admin\IndexController@home');

    #User routes
    Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
        Route::get('/', 'Admin\UserController@list');
        Route::get('add', 'Admin\UserController@add')->name('add');
        Route::post('store','Admin\UserController@store')->name('store');
    });

    #Advertisement routes
    Route::get('advertisements', 'Admin\AdvertisementController@list');


    Route::get('characteristics', 'Admin\CharacteristicController@index');

});