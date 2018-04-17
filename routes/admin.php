<?php

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', 'Admin\IndexController@home');

    #User routes
    Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
        Route::get('/', 'Admin\UserController@list');
        Route::get('create', 'Admin\UserController@create')->name('create');
        Route::post('store','Admin\UserController@store')->name('store');
    });
    #Advertisement routes
    Route::group(['prefix' => 'advertisements', 'as' => 'advertisements.'],function(){
        Route::get('/', 'Admin\AdvertisementController@list');
        Route::get('create', 'Admin\AdvertisementController@create');
    });
    #Characteristics routes
    Route::group(['prefix' => 'characteristics', 'as' => 'characteristics.'],function(){
        Route::get('/', 'Admin\CharacteristicController@index');
        Route::get('create', 'Admin\CharacteristicController@create')->name('create');
        Route::post('store','Admin\CharacteristicController@store')->name('store');
    });

});