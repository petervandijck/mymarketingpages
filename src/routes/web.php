<?php

use Illuminate\Support\Facades\Route;

/*
 * Marketing pages
 */

Route::view('/', 'marketing.pages.home'); // Loggedout homepage
Route::view('/features', 'marketing.pages.');
Route::view('/why', 'marketing.pages.why'); // use cases and differentiators
Route::view('/pricing', 'marketing.pages.pricing');
Route::view('/about/team', 'marketing.pages.about.team');
Route::view('/about/vision', 'marketing.pages.about.vision');
Route::view('/resources/faq', 'marketing.pages.resources.faq');
Route::view('/resources/support', 'marketing.pages.resources.support');
Route::view('/resources/contact', 'marketing.pages.resources.contact');
Route::view('/legal/toc', 'marketing.pages.legal.toc');
Route::view('/legal/privacy', 'marketing.pages.legal.privacy');
Route::view('/testing/everything', 'marketing.pages.testing.everything');