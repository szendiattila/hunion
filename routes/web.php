<?php

Route::post('dashboard/login', '\App\Http\Controllers\Auth\LoginController@login');
Route::get('dashboard/login', '\App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('dashboard/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('dashboard/register', '\App\Http\Controllers\Auth\RegisterController@showRegistrationForm');
//Route::post('dashboard/register', '\App\Http\Controllers\Auth\RegisterController@register');
Route::post('dashboard/password/email', '\App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('dashboard/password/reset', '\App\Http\Controllers\Auth\ResetPasswordController@reset');
Route::get('dashboard/password/reset', '\App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm');
Route::get('dashboard/password/reset/{token}', '\App\Http\Controllers\Auth\ResetPasswordController@showResetForm');
//Route::auth();

Route::get('/', function(){
    return redirect('cegunkrol');
});

Route::group(['prefix' => 'filemanager'], function() {
    Route::get('show', 'FilemanagerLaravelController@getShow');
    Route::get('connectors', 'FilemanagerLaravelController@getConnectors');
    Route::post('connectors', 'FilemanagerLaravelController@postConnectors');
});

Route::get('{slug}', '\Modules\Page\Http\Controllers\Frontend\PageController@index');