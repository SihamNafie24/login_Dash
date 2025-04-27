<?php

use Illuminate\Support\Facades\Route;

// Redirect root URL to admin home
Route::redirect('/', 'admin/home');

// Authentication routes (without registration)
Auth::routes(['register' => false]);

// Change Password Routes
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Group admin routes with auth middleware
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('permissions', 'Admin\PermissionsController');
    Route::delete('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');

    Route::resource('roles', 'Admin\RolesController');
    Route::delete('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');

    Route::resource('users', 'Admin\UsersController');
    Route::delete('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');

    // About & Contact protected (optional: if you want them protected inside dashboard)
    Route::view('/about', 'admin.about')->name('about');
    Route::view('/contact', 'admin.contact')->name('contact');
});

// If you want About and Contact public (accessible without login), move them outside the group
// Route::view('/about', 'admin.about')->name('admin.about');
// Route::view('/contact', 'admin.contact')->name('admin.contact');
