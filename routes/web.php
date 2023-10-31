<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisteVendorController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\VendorProfileController;


Auth::routes();

Route::view('/', 'welcome');

Route::view('login', 'auth.login')->name('login');

//! Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['auth', 'role:admin'])->group(function () {
        //! Dashboard Routes
        Route::controller(AdminController::class)->group(function () {
            Route::get('dashboard', 'AdminDashboard')->name('admin.dashboard');
        });
        //! Profile Routes
        Route::controller(AdminProfileController::class)->group(function () {
            Route::get('profile', 'show')->name('admin.profile.show');
            Route::put('profile', 'update')->name('profile.update');
        });
        //! Categories Routes
        Route::controller(CategoryController::class)->group(function () {
            Route::get('all_Categories', 'index')->name('admin.allCategories');
        });
        //! User Routes
        Route::controller(UserController::class)->group(function () {
            Route::get('all_users', 'AdminUsers')->name('admin.users');
        });
    });
});

// ! Vendor Routes
Route::group(['prefix' => 'vendor'], function () {
    //! Auth Routes
    Route::controller(RegisteVendorController::class)->group(function () {
        Route::get('register', 'index')->name('vendor.register');
    });
    Route::middleware(['auth', 'role:vendor'])->group(function () {
        //! Dashboard Routes
        Route::controller(VendorController::class)->group(function () {
            Route::get('dashboard', 'VendorDashboard')->name('vendor.dashboard');
        });
        //! Profile Routes
        Route::controller(VendorProfileController::class)->group(function () {
            Route::get('profile', 'show')->name('vendor.profile.show');
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
