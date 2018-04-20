<?php

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', 'Admin\IndexController@home');

    #User routes
    Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
        Route::get('/', 'Admin\UserController@list')->name('list');
        Route::get('create', 'Admin\UserController@create')->name('create');
        Route::post('store','Admin\UserController@store')->name('store');
        Route::delete('delete','Admin\UserController@delete')->name('delete');
    });
    #Advertisement routes
    Route::group(['prefix' => 'advertisements', 'as' => 'advertisements.'],function(){
        Route::get('/', 'Admin\AdvertisementController@list')->name('list');
        Route::get('create', 'Admin\AdvertisementController@create')->name('create');
        Route::post('store','Admin\AdvertisementController@store')->name('store');
        Route::delete('delete','Admin\AdvertisementController@delete')->name('delete');
        Route::get('edit/{id}','Admin\AdvertisementController@edit')->name('edit');
    });
    #Characteristics routes
    Route::group(['prefix' => 'characteristics', 'as' => 'characteristics.'],function(){
        Route::get('/', 'Admin\CharacteristicController@index')->name('list');
        Route::get('create', 'Admin\CharacteristicController@create')->name('create');
        Route::post('store','Admin\CharacteristicController@store')->name('store');
        Route::post('update/{id}','Admin\CharacteristicController@update')->name('update');
        Route::delete('destroy/{id}','Admin\CharacteristicController@destroy')->name('destroy');
        Route::get('edit/{id}','Admin\CharacteristicController@edit')->name('edit');
    });

    #Cities routes
    Route::group(['prefix'=> 'cities', 'as' => 'cities.'],function (){
        Route::get('/', 'Admin\CityController@list')->name('list');
        Route::get('create', 'Admin\CityController@create')->name('create');
        Route::post('store','Admin\CityController@store')->name('store');
        Route::post('update/{id}','Admin\CityController@update')->name('update');
        Route::delete('destroy/{id}','Admin\CityController@destroy')->name('destroy');
        Route::get('edit/{id}','Admin\CityController@edit')->name('edit');
    });

});