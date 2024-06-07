<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPages;

Route::controller(StaticPages::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
