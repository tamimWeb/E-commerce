<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/blog', function(){
    return view('frontend.pages.blog');
})->name('my_blog');

Route::get('/contact', function(){
    return view('frontend.pages.contact');
});

Route::get('/tamim',[HomeController::class, 'index'])->name('blog');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
