<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactTextController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\KitchenController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PopularController;
use App\Http\Controllers\Admin\RecipesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServImageController;
use App\Models\ServImages;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Auth;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::group(
            [
                'prefix' => 'dashboard',
                'middleware' => ['auth']
                // 'middleware' => ['auth', 'permission']
            ],

            function () {
                Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
                Route::resource('slider', SliderController::class);
                Route::resource('testimonial', TestimonialController::class);
                Route::resource('partner', PartnerController::class);
                Route::resource('team', TeamController::class);
                Route::resource('service', ServiceController::class);
                Route::get('/service/option/{id}',  'App\Http\Controllers\Admin\ServiceController@option')->name('service.option');
                Route::get('/service/serveImages/{id}',  'App\Http\Controllers\Admin\ServiceController@serveImages')->name('service.serveImages');
                Route::get('/ServImages/create/{id}', 'App\Http\Controllers\Admin\ServImageController@servImages_create')->name('servImages_create');
                Route::get('/option/create/{id}', 'App\Http\Controllers\Admin\OptionController@option_create')->name('option_create');
                Route::resource('servImages', ServImageController::class);
                Route::resource('option', OptionController::class);
                Route::resource('categories', CategoriesController::class);
                Route::resource('faq', FaqController::class);
                Route::resource('feature', FeatureController::class);

                Route::resource('recipes', RecipesController::class);
                Route::post('comments/comment-status', [CommentsController::class, 'commentStatus'])->name('comments.comment-status');
                Route::resource('comments', CommentsController::class);
                Route::resource('gallery', GalleryController::class);
                Route::prefix('page')->group(function () {
                    Route::get('/index', 'App\Http\Controllers\Admin\PagesController@index')->name('page.index');
                    Route::get('/about', 'App\Http\Controllers\Admin\PagesController@about')->name('page.about');
                    Route::put('/about_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/ourMission', 'App\Http\Controllers\Admin\PagesController@ourMission')->name('page.ourMission');
                    Route::put('/ourMission_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/construction', 'App\Http\Controllers\Admin\PagesController@construction')->name('page.construction');
                    Route::put('/construction_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/renovation', 'App\Http\Controllers\Admin\PagesController@renovation')->name('page.renovation');
                    Route::put('/renovation_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/contact', 'App\Http\Controllers\Admin\PagesController@contact')->name('page.contact');
                    Route::put('/contact_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/video', 'App\Http\Controllers\Admin\PagesController@video')->name('page.video');
                    Route::put('/video_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/feature', 'App\Http\Controllers\Admin\PagesController@feature')->name('page.feature');
                    Route::put('/feature_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/welcome', 'App\Http\Controllers\Admin\PagesController@welcome')->name('page.welcome');
                    Route::put('/welcome_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/subscribe', 'App\Http\Controllers\Admin\PagesController@subscribe')->name('page.subscribe');
                    Route::put('/subscribe_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/faq', 'App\Http\Controllers\Admin\PagesController@faq')->name('page.faq');
                    Route::put('/faq_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/projects', 'App\Http\Controllers\Admin\PagesController@projects')->name('page.projects');
                    Route::put('/projects_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                    Route::get('/services', 'App\Http\Controllers\Admin\PagesController@services')->name('page.service');
                    Route::put('/projects_update/{id}', 'App\Http\Controllers\Admin\PagesController@update')->name('page.update');
                });

                Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
                Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');
                // contact form page route
                Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
                Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');
                Route::get('/contact/show-reply/{id}', [ContactController::class, 'show_reply'])->name('contact.show-reply');
                Route::post('/contact/contact-reply', [ContactController::class, 'contact_reply'])->name('contact.contact-reply');
            }
        );
    }
);
Auth::routes();
