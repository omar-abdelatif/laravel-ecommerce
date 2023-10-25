<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;


Auth::routes();

Route::view('login', 'auth.login')->name('login');

//! Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['auth', 'role:admin'])->group(function () {
        //! Dashboard Routes
        Route::controller(AdminController::class)->group(function () {
            Route::get('dashboard', 'AdminDashboard')->name('admin.dashboard');
        });
    });
});

// ! Vendor Routes
Route::group(['prefix' => 'vendor'], function () {
    Route::middleware(['auth', 'role:vendor'])->group(function () {
        //! Dashboard Routes
        Route::controller(VendorController::class)->group(function () {
            Route::get('dashboard', 'VendorDashboard')->name('vendor.dashboard');
        });
    });
});

// //! User Routes
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
        Route::
        view('users', 'users')->name('users.index');
    });
    Route::view('about', 'about')->name('about');
    
});
