<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routes with localization (Arabic/English)
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

        // Redirect home route to the dashboard for admins
        Route::get('/', function () {
            return redirect()->route('dashboard'); // Redirect to dashboard
        })->name('home');

        // Dashboard route
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->middleware('auth:admin')
            ->name('dashboard');

    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Freelancer routes
    Route::middleware(['auth:freelancer'])->group(function () {
        // Add freelancer-specific routes here
    });

    // Business Owner routes
    Route::middleware(['auth:business_owner'])->group(function () {
        // Add business owner-specific routes here
    });

    // Admin routes
    Route::middleware(['auth:admin'])->group(function () {
        // Add admin-specific routes here
    });
});

require __DIR__ . '/auth.php';
