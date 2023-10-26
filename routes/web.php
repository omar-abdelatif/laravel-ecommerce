<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;

Auth::routes();

Route::view('/', 'welcome');

Route::view('login', 'auth.login')->name('login');

//! Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        //! Dashboard Routes
        Route::controller(DashboardController::class)->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
        });
        //! Profile Routes
        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'show')->name('profile.show');
            Route::put('profile', 'update')->name('profile.update');
        });
        //! User Routes
        Route::controller(UserController::class)->group(function () {
            Route::view('users', 'users.index')->name('users.index');
        });
    });
});

// ! Vendor Routes
Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::group(['prefix' => 'vendor'], function () {
        //! Dashboard Routes
        Route::controller(DashboardController::class)->group(function () {
            Route::get('dashboard', 'index')->name('dashboard');
        });
        //! Profile Routes
        Route::controller(ProfileController::class)->group(function () {
            Route::get('profile', 'show')->name('profile.show');
            Route::put('profile', 'update')->name('profile.update');
        });
        //! User Routes
        Route::controller(UserController::class)->group(function () {
            Route::view('users', 'users.index')->name('users.index');
        });
        //! About Routes
        Route::view('about', 'about')->name('about');
    });
});

//! User Routes
Route::middleware(['auth'])->group(function () {
    //! Dashboard Routes
    Route::controller(DashboardController::class)->group(function(){
        Route::get('dashboard', 'index')->name('dashboard');
    });
    //! Profile Routes
    Route::controller(ProfileController::class)->group(function(){
        Route::get('profile', 'show')->name('profile.show');
        Route::put('profile', 'update')->name('profile.update');
    });
    //! User Routes
    Route::controller(UserController::class)->group(function(){
        Route::view('users', 'users.index')->name('users.index');
    });
    //! About Routes
    Route::view('about', 'about')->name('about');
    
});
