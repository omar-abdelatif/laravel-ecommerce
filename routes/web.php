<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
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
use App\Http\Controllers\VendorProductsController;


Auth::routes(['verify' => true]);

//! Site Routes
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('user/login', 'login')->name('user.login');
    Route::get('users/register', 'userRegister')->name('user.register');
    Route::post('signout', 'logout')->name('user.logout');
    Route::get('become_vendor', 'becomeVendor')->name('become.vendor');
    Route::get('forget_password', 'forgetPassword')->name('forget');
    Route::post('loginRequst', 'loginRequest')->name('user.loginRequest');
});

//! Dashboard Login to Admin And Vendor Dashboard
Route::view('login', 'auth.login')->name('login');

//! Admin Routes
Route::group(['prefix' => 'admin'], function () {
    //! Register Routes
    Route::controller(RegisterController::class)->group(function () {
        Route::view('signup', 'auth/register');
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
            Route::get('all_categories', 'index')->name('admin.allCategories');
            Route::post('add-category', 'store')->name('admin.categories.store');
            Route::get('cat_remove/{id}', 'destroy')->name('admin.categories.destroy');
            Route::post('cat_update', 'update')->name('admin.categories.update');
        });
        //! Sub_Categories Routes
        Route::controller(SubCategoryController::class)->group(function () {
            Route::get('all_subcategories', 'index')->name('admin.subCategories');
            Route::post('add-subcategory', 'store')->name('admin.subCategories.store');
            Route::get('subcat_destroy/{id}', 'destroy')->name('admin.subCategories.destroy');
            Route::post('subcat_update', 'update')->name('admin.subCategories.update');
        });
        //! Vendor Routes
        Route::controller(VendorController::class)->group(function(){
            Route::get('vendor_list', 'listIndex')->name('admin.vendorsList');
            Route::get('vendor_inactive', 'inactiveVendor')->name('admin.inactive.vendor');
            Route::get('vendor_active', 'activeVendor')->name('admin.active.vendor');
            Route::get('vendor_destroy/{id}', 'destroy')->name('admin.vendor.destroy');
            Route::get('vendor_active/vendor_details/{id}', 'vendorDetails')->name('admin.active.vendor.details');
            Route::post('vendor_active/vendor_details/vendor_disapprove', 'disApprove')->name('admin.vendor.disApprove');
            Route::get('vendor_inactive/vendor_details/{id}', 'vendorDetails')->name('admin.inactive.vendor.details');
            Route::post('vendor_inactive/vendor_details/vendor_approve', 'approveVendor')->name('admin.vendor.approve');
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
        //! Products Routes
        Route::controller(VendorProductsController::class)->group(function () {
            Route::get('all_products', 'index')->name('vendor.products');
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
