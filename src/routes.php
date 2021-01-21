<?php

Route::group(['namespace'=>'Adamantine\Adamantine\Controllers'], function() {
    Route::get('/'.env('DEVELOPER_AREA_ACCESS'), 'AuthController@login');
});
