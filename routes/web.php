<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\InquiryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';




// Blade views
Route::view('/', 'welcome')->name('home');
Route::view('/404', '404')->name('404');
Route::view('/about', 'about')->name('about');
Route::view('/amenities', 'amenities')->name('amenities');
Route::view('/contact', 'contact')->name('contact');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/facilities', 'facilities')->name('facilities');
Route::view('/faq', 'faq')->name('faq');
Route::view('/footer', 'footer')->name('footer');
Route::view('/gallery-image', 'gallery-image')->name('gallery-image');
Route::view('/header', 'header')->name('header');

// Static HTML files
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/room-details', function () {
    return view('room-details1');
})->name('room-details');

Route::get('/theestate', function () {
    return view('theestate');
})->name('theestate');

Route::get('/investment', function () {
    return view('investment');
})->name('investment');


Route::fallback(function () {
    return view('404');
});

// Route::post('/contact-form', [ContactFormController::class, 'store']);
Route::post('/contact-form', [ContactFormController::class, 'store'])->name('contact.submit');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.submit');
Route::post('/site-visit-inquiry', [InquiryController::class, 'store'])->name('site.visit.inquiry.submit');

