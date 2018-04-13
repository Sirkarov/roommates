<?php

Route::get('/admin', 'Admin\IndexController@home');
Route::get('/admin/user', 'Admin\UserController@user');
Route::get('/admin/advertisement', 'Admin\AdvertisementController@advert');
