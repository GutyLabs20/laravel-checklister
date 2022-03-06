<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function () {
        Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);
        // ->only(['index', 'edit', 'update']);
    });

});
