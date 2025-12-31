<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/our-service-01', function () {
    return view('our-service-01');
});

Route::get('/general-insurance', function () {
    return view('general-insurance');
});

Route::get('/life-insurance', function () {
    return view('life-insurance');
});

Route::get('/services/mutual-funds', function () {
    return view('services.mutual-funds');
});

Route::get('/services/general-insurance', function () {
    return view('services.general-insurance');
});

Route::get('/services/life-insurance', function () {
    return view('services.life-insurance');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact-01', function () {
    return view('contact-01');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/faqs-page', function () {
    return view('faq');
});

Route::get('/our-team', function () {
    return view('our-team');
});
