<?php

Route::group(['middleware' => 'web', 'prefix' => 'dashboard', 'namespace' =>
    'Modules\Product\Http\Controllers\Dashboard'], function () {

    Route::resource('/product', 'ProductController', ['except' => 'show']);
});

Route::resource('termekeink', 'Modules\Product\Http\Controllers\Frontend\ProductController', ['only' => ['index', 'show']]);
