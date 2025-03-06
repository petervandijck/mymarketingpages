<?php

use Illuminate\Support\Facades\Route;

/**
 * Marketing pages
 *
 * /                    -> loggedout homepage
 * /features
 * /why                 -> use cases and differentiators
 * /pricing
 * /about/team
 * /about/vision
 * /resources/faq
 * /resources/support
 * /legal/toc
 * /legal/privacy
 */
Route::get('/', function () {
    return view('marketing.pages.home');
})->name('marketing.home');