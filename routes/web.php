<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::resource('posts', PostController::class)->except([
    'index',
]);

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/messages', [ContactController::class, 'showMessages'])->name('contact.messages');

Route::get('/posts2/contact', function () {
    return view('contact');
})->name('posts2.contact');

Route::post('/posts2', function () {
    return redirect()
        ->route('posts2.contact');
})->name('posts2.store');
