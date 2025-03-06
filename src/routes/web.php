<?php

use Illuminate\Support\Facades\Route;

Route::get('/marketing', function () {
    return view('marketing.home');
})->name('marketing.home');