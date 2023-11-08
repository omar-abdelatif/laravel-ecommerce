<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegisteVendorController;
use App\Http\Controllers\VendorProfileController;


Auth::routes(['verify' => true]);

Route::view('/', 'welcome');

Route::view('login', 'auth.login')->name('login');

//! Admin Routes
Route::group(['prefix' => 'admin'], function () {
    //! Register Routes
    Route::controller(RegisterController::class)->group(function () {
        Route::post('register', 'store')->name('admin.register');
    });
    Route::middleware(['auth', 'role:admin', 'verified'])->group(function () {
        //! Dashboard Routes
        Route::controller(AdminController::class)->group(function () {
            Route::get('dashboard', 'AdminDashboard')->name('admin.dashboard');
        });
        //! Profile Routes
        Route::controller(AdminProfileController::class)->group(function () {
            Route::get('profile', 'show')->name('admin.profile.show');
            Route::put('profile', 'update')->name('admin.profile.update');
        });
        //! Categories Routes
        Route::controller(CategoryController::class)->group(function () {
            Route::get('all_Categories', 'index')->name('admin.allCategories');
            Route::post('add-category', 'store')->name('admin.categories.store');
            Route::get('remove/{id}', 'destroy')->name('admin.categories.destroy');
            Route::post('update', 'update')->name('admin.categories.update');
        });
        //! Sub_Categories Routes
        Route::controller(SubCategoryController::class)->group(function () {
            Route::get('all_subcategories', 'index')->name('admin.subCategories');
            Route::post('add-subcategory', 'store')->name('admin.subCategories.store');
            Route::get('destroy/{id}', 'destroy')->name('admin.subCategories.destroy');
            Route::post('update', 'update')->name('admin.subCategories.update');
        });
        //! User Routes
        Route::controller(UserController::class)->group(function () {
            Route::get('all_users', 'AdminUsers')->name('admin.users');
            Route::get('delete_users/{id}', 'deleteUser')->name('admin.delete');
        });
    });
});

// ! Vendor Routes
Route::group(['prefix' => 'vendor'], function () {
    //! Auth Routes
    Route::controller(RegisteVendorController::class)->group(function () {
        Route::get('register', 'index')->name('vendor.register');
        Route::post('register', 'vendorCreation')->name('vendor.store');
    });
    Route::middleware(['auth', 'role:vendor', 'verified'])->group(function () {
        //! Dashboard Routes
        Route::controller(VendorController::class)->group(function () {
            Route::get('dashboard', 'VendorDashboard')->name('vendor.dashboard');
        });
        //! Profile Routes
        Route::controller(VendorProfileController::class)->group(function () {
            Route::get('profile', 'show')->name('vendor.profile.show');
            Route::put('profile', 'update')->name('vendor.profile.update');
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
Route::group(['prefix' => 'user'], function () {
    Route::middleware(['auth', 'role:user', 'verified'])->group(function () {
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
