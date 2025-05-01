<?php

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DpController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\Password;

Route::get('/payment', [PaymentsController::class, 'showPaymentForm'])->name('payment.form');
Route::post('/payment', [PaymentsController::class, 'processPayment'])->name('payment.process');
Route::get('/payment/callback', [PaymentsController::class, 'handleCallback'])->name('payment.callback');


Route::get('/', [UsersController::class, 'index'])->name('posts.index');

Route::get('users/{id}', function ($id) {
    
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin-dashboard', [UsersController::class, 'fetch_all_users'])->name('admin.dashboard');
});

Route::get('/admin/users/{id}/toggle-block', [UsersController::class, 'blockUser'])
    ->name('admin.user.toggle')
    ->middleware(['auth', 'verified']);


Route::get('/dashboard', [UsersController::class, 'fetchPayments'])->middleware(['auth', 'verified'])->name('dashboard.user');

Route::get('/profile/dp/upload', function () {
    return view('user_dash.upload_dp');})
->middleware(['auth', 'verified'])->name('upload_dp');


Route::post('/profile/dp/upload', [DpController::class ,'upload_dp'])
->middleware(['auth', 'verified'])->name('upload_dpp');

Route::get('/about', [UsersController::class, 'fetchAllUsers'])->name('about');

Route::get('/services', [UsersController::class, 'service'])->name('services');

Route::get('/donations/download', [DonationController::class, 'download'])->name('donations.download');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/delete', [ProfileController::class, 'deleteAccountForm'])->name('profile.delete');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    Route::patch('/user/password', [ProfileController::class, 'updatePasswordSubmit'])->name('profile.password.update.submit');
});

require __DIR__.'/auth.php';
