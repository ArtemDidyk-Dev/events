<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\VenueController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::resource('event', EventController::class)->except(['show']);
        Route::resource('venue', VenueController::class)->except(['show']);
    });
});

Route::group(['middleware' => 'guest'], function () {

    Route::group(['prefix' => 'register'], function () {
        Route::get('/', [RegisterController::class, 'create'])->name('register.create');
        Route::post('/', [RegisterController::class, 'store'])->name('register.store');
    });

    Route::group(['prefix' => 'login'], function () {
        Route::get('/', [LoginController::class, 'show'])->name('login');
        Route::post('/', [LoginController::class, 'authenticate'])->name('login.authenticate');
    });

});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', IndexController::class)->name('index');
});


Route::post('logout', [LoginController::class, 'logout'])->name('logout');
