<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPages;
use App\Http\Controllers\General;


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
});

