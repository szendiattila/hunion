<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Frontend\Http\Controllers'], function () {
    Route::get('/', 'FrontendController@index');
    Route::post('/rendeles/{id}/{quantity}', 'FrontendController@orderForm');
    Route::post('/rendeles-veglegesites', 'FrontendController@order');
    Route::post('/rendeles-veglegesites-ajax', 'FrontendController@orderAjax');

    Route::get('getProduct/{id}/{type}', 'FrontendController@getProductById');
});
