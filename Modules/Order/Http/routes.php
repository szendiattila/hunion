<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Order\Http\Controllers\Frontend'], function()
{
    Route::get('ajanlatkeres/{id}', 'OrderController@create');
    Route::post('ajanlatkeres', 'OrderController@store');
});

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'dashboard' , 'namespace' => 'Modules\Order\Http\Controllers\Dashboard'], function()
{
    Route::resource('order', 'OrderController');
});
