<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BusinessOwnerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FieldController;
use App\Http\Controllers\Admin\FreelancerController;
use App\Http\Controllers\Admin\JobTitleController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TitleController;
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
    // Route::get('/', function () {
    //     return view('welcome');
    // })->name('welcome');
    Route::get('/', function () {
        return view('front-end.homepage');
    })->name('welcome');

    Route::get('/contact', function () {
        return view('front-end.contactpage');
    })->name('contact');

    Route::prefix('admin')->name('admin.')->group(function () {

        require __DIR__ . '/adminAuth.php';

        // Route::view('/login', 'admin.auth.login')->name('login');

        Route::middleware(['admin'])->group(function () {
            Route::view('/', 'admin.index')->name('index');
            // Admins
            Route::resource('admins', AdminController::class, ['except' => 'show']);
            Route::resource('settings', SettingController::class);
            Route::resource('titles', TitleController::class);
            Route::resource('tags', TagController::class);

            Route::resource('fields', FieldController::class);
            Route::resource('job_titles', JobTitleController::class);
            Route::resource('freelancers', FreelancerController::class);
            Route::resource('business_owners', BusinessOwnerController::class);
            Route::resource('orders', OrderController::class);
            Route::resource('services', ServiceController::class);
            Route::resource('advantages', AdvantageController::class);
            Route::resource('blogs', BlogController::class);
            Route::resource('contacts', ContactController::class);

        });

    });


});

// require __DIR__ . '/auth.php';
