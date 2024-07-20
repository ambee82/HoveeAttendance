<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPages;
use App\Http\Controllers\General;
use App\Http\Controllers\Tutor;
use App\Http\Middleware\AuthUser;

Route::controller(General::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about-us', 'about_us')->name('about-us');
    Route::get('/how-it-works', 'how_it_works')->name('how-it-works');
    Route::get('/subsriptions', 'subscriptions')->name('subscriptions');
    Route::get('/contact-us', 'contact_us')->name('contact-us');
    Route::get('/terms-and-conditions', 'terms_and_conditions')->name('terms-and-conditions');
    Route::get('/thanks-us', 'thanks')->name('thanks');
    Route::get('/sitemap', 'sitemap')->name('sitemap');
    Route::get('/services', 'services')->name('services');
    Route::get('/help-and-support', 'support')->name('help-and-support');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/testimonials', 'testimonials')->name('testimonials');
    Route::get('/register', 'register')->name('register');
    Route::get('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/verify-otp', 'verify_otp')->name('verify-otp');
});

Route::name('auth.')->controller(AuthController::class)->prefix('/auth')->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
    Route::post('/verify-otp', 'verify_otp')->name('verify-otp');
});

Route::middleware([AuthUser::class])->name('user.')
    ->controller(AuthUserController::class)->prefix('/user')->group(function () {
        Route::get('/switch-role', 'switch_role')->name('switch-role');
        Route::prefix('/forms')->name('forms.')->group(function () {
            Route::post('/switch-role', 'post_switch_role')->name('switch-role');
        });
    });
