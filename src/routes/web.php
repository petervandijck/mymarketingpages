<?php

use Illuminate\Support\Facades\Route;

/*
 * Marketing pages
 */

Route::view('/', 'marketing.pages.home')->name('home'); // Loggedout homepage
Route::view('/features', 'marketing.pages.')->name('features');
Route::view('/pricing', 'marketing.pages.pricing')->name('pricing');
Route::view('/about/team', 'marketing.pages.about.team')->name('team');
Route::view('/about/vision', 'marketing.pages.about.vision')->name('vision');
Route::view('/resources/faq', 'marketing.pages.resources.faq')->name('faq');
Route::view('/resources/support', 'marketing.pages.resources.support')->name('support');
Route::view('/resources/contact', 'marketing.pages.resources.contact')->name('contact');
Route::view('/legal/toc', 'marketing.pages.legal.toc')->name('toc');
Route::view('/legal/privacy', 'marketing.pages.legal.privacy')->name('privacy');

if (app()->isLocal()) {
    Route::view('/template', 'marketing.pages.template'); // kitchen sink template for testing
}
