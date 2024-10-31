<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Routes with localization (Arabic/English)
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    // Welcome route as the main page
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::prefix('admin')->group(function(){
Route::middleware(['admin'])->group(function () {
    Route::view('/', 'admin.index')->name('admin.index');
});

require __DIR__ . '/adminAuth.php';

        Route::view('/login', 'admin.auth.login')->name('admin.login');



   });



});

require __DIR__ . '/auth.php';
