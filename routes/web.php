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
use App\Http\Controllers\Admin\FreelancerProjectController;
use App\Http\Controllers\Admin\FreelancerServiceController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Front\BusinessOwnerProfileController;
use App\Http\Controllers\Front\FreelancerProfileController;
use App\Http\Controllers\Front\HomeController;

use App\Http\Controllers\ProfileController;
use App\Models\FavoriteFreelancer;
use App\Models\FreelancerService;
use App\Models\Order;
use App\Models\Service;
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
    // .....
    // Route::get('/', function () {
    //     return view('front-end.homepage');
    // })->name('welcome');

    Route::post('signin', [AuthController::class, 'store'])->name('signin.store');
    Route::post('logout', [AuthController::class, 'destroy'])->name('logout');

    Route::get('/', [HomeController::class, 'index'])->name('welcome');

    Route::get('/talent-signup', [AuthController::class, 'talentSignUp'])->name('talent-signup');
    Route::get('/visionary-signup', [AuthController::class, 'visionarySignUp'])->name('visionary-signup');
    Route::get('/signin', [AuthController::class, 'signIn'])->name('signIn');

    Route::post('/freelancerRegister', [AuthController::class, 'freelancerRegister'])->name('freelancer.register');
    Route::post('/businessOwnerRegister', [AuthController::class, 'businessOwnerRegister'])->name('business_owner.register');

    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/freelancers', [HomeController::class, 'freelancers'])->name('freelancers');
    Route::get('/freelancers/{id}', [HomeController::class, 'freelancer_details'])->name('freelancerName');
    Route::get('/freelancers/{id}/projects', [HomeController::class, 'freelancer_projects'])->name('freelancerNameProjects');
    Route::get('/services/{id}/offers', [HomeController::class, 'service_details'])->name('service-offers');
    Route::get('/services/offers/offer', [HomeController::class, 'freelancer_service_details'])->name('offer');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/blogs', function () {
        return view('front-end.blogs');
    });
    Route::get('/blogs/blog', function () {
        return view('front-end.blog');
    });


    Route::middleware(['business_owner'])->group(function () {

        Route::get('/business-area-b', [BusinessOwnerProfileController::class, 'dashboard'])->name('business-area-b');
       
        Route::get('/business-area/visionary-profile', [BusinessOwnerProfileController::class, 'visionaryProfile'])->name('dashboard-visionary-profile');

        Route::patch('/business-area/visionary-profile/{id}/update', [BusinessOwnerProfileController::class, 'updateVisionaryProfile'])->name('dashboard-visionary-profile.update');

        // Route::get('/business-area/visionary-profile', function () {
        //     return view('front-end.dashboard.visionary.dashboard-visionary-profile');
        // })->name('dashboard-visionary-profile');

        Route::get('/business-area/visionary-fav-freelancers', [BusinessOwnerProfileController::class, 'favFreelancers'])->name('dashboard-visionary-fav-freelancers');
        Route::get('/favorite_freelancer/{id}', [FavoriteFreelancer::class, 'destroy'])->name('fav_freelancer.destroy');

        // Route::get('/business-area/visionary-fav-freelancers', function () {
        //     return view('front-end.dashboard.visionary.dashboard-visionary-fav-freelancers');
        // })->name('dashboard-visionary-fav-freelancers');

        
        Route::get('/business-area/visionary-orders', [BusinessOwnerProfileController::class, 'visionaryOrders'])->name('dashboard-visionary-orders');
        Route::get('/business-area/visionary-orders/order/{id}', [BusinessOwnerProfileController::class, 'order'])->name('dashboard-visionary-orders-order');

        Route::resource('/orders', OrderController::class);

        // Route::get('/business-area/visionary-orders', function () {
        //     return view('front-end.dashboard.visionary.dashboard-visionary-orders');
        // })->name('dashboard-visionary-orders');
    });

    Route::middleware(['freelancer'])->group(function () {
        Route::get('/business-area/{id}', [FreelancerProfileController::class, 'dashboard'])->name('business-area');

        Route::get('/business-area/talent-profile/{id}', [FreelancerProfileController::class, 'talentProfile'])->name('dashboard-talent-profile');
        Route::patch('/business-area/talent-profile/{id}/update', [FreelancerProfileController::class, 'updateTalentProfile'])->name('dashboard-talent-profile.update');

        Route::resource('freelancer-services', FreelancerServiceController::class);
        Route::get('/business-area/talent-services/{id}', [FreelancerProfileController::class, 'talentServices'])->name('dashboard-talent-services');
        // Route::get('/business-area/talent-services/new-service', [FreelancerProfileController::class, 'newService'])->name('dashboard-talent-services-new');
        // Route::get('/business-area/talent-services/service', [FreelancerProfileController::class, 'service'])->name('dashboard-talent-serices-service');
    
        Route::get('/business-area/talent-projects/{id}', [FreelancerProfileController::class, 'talentProjects'])->name('dashboard-talent-projects');
        Route::resource('freelancer-projects', FreelancerProjectController::class);

        // Route::get('/business-area/talent-projects/project', [FreelancerProfileController::class, 'project'])->name('dashboard-talent-projects-project');
        // Route::get('/business-area/talent-projects/new-project', [FreelancerProfileController::class, 'newProject'])->name('dashboard-talent-projects-new');
        
        Route::get('/business-area/talent-orders/{id}', [FreelancerProfileController::class, 'talentOrders'])->name('dashboard-talent-orders');
        Route::get('/business-area/talent-orders/order/{id}', [FreelancerProfileController::class, 'order'])->name('dashboard-talent-orders-order');
    });


    Route::prefix('admin')->name('admin.')->group(function () {

        require __DIR__ . '/adminAuth.php';

        // Route::view('/login', 'admin.auth.login')->name('login');

        Route::middleware(['admin'])->group(function () {
            // Route::view('/', 'admin.index')->name('index');

            Route::get('/', [DashboardController::class, 'index'])->name('index');

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
