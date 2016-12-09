<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Frontend\Http\Controllers'], function () {
    Route::get('/', 'FrontendController@index');
});
