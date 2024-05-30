<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\PricingController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\FeaturesController;
use App\Http\Controllers\Backend\TestimonialController;


//Fronted All Route
Route::controller(indexController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'service')->name('service');
    Route::get('service/details/{id}', 'service_details')->name('service.details');
    Route::get('feature/details/{id}', 'feature_details')->name('feature.details');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('contact/store', 'store')->name('contact.store');

});
Route::post('/subscribe', [SubscribeController::class, 'store']);
Route::post('/subscribe/{hash}', [SubscribeController::class, 'show']);


Auth::routes(
    [
        'register' =>false,
        'login' =>false
    ]
);

Route::get('secure-login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::post('secure-login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::get('secure-register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm']);
Route::post('secure-register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
//Backend Route
Route::group(['middleware' => ['auth','isAdmin']], function () {

Route::prefix('admin')->group(function () {
    Route::get('dashboard',function () {
        return view('backend.dashboard');
    });
  Route::resource('about', AboutController::class);
  Route::resource('service', ServiceController::class);
//   Route::resource('contact', ContactController::class);
  Route::resource('brand', BrandController::class);
  Route::resource('testimonial', TestimonialController::class);
  Route::resource('pricing', PricingController::class);
  Route::resource('faq', FaqController::class);
  Route::resource('features', FeaturesController::class);


 // Settings Generale Route
 Route::get('setting/general', [SettingController::class, 'general'])->name('general.index');
 Route::patch('setting/general/update', [SettingController::class, 'general_update'])->name('general.update');

 // Settings Appearance Route
 Route::get('setting/appearance', [SettingController::class, 'appearance'])->name('appearance.index');
 Route::patch('setting/appearance/update', [SettingController::class, 'appearance_update'])->name('appearance.update');

 // Settings Privacy Route
 Route::get('setting/privacy', [SettingController::class, 'privacy'])->name('privacy.index');
 Route::patch('setting/privacy/update', [SettingController::class, 'privacy_update'])->name('privacy.update');

 // Settings Term Route
 Route::get('setting/term', [SettingController::class, 'term'])->name('term.index');

 Route::patch('setting/term/update', [SettingController::class, 'term_update'])->name('term.update');

 // Settings Social Route
 Route::get('setting/social', [SettingController::class, 'social'])->name('social.index');
 Route::patch('setting/social/update', [SettingController::class, 'social_update'])->name('social.update');

});
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');