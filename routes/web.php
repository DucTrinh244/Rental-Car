<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ImageController;

// FRONTEND ROUTES
Route::get('/', [ClientController::class, 'ShowHome']);
Route::get('/home', [ClientController::class, 'ShowHome'])->name('home');
Route::get('/About', [ClientController::class, 'ShowAbout']);
Route::get('/show-services', [ClientController::class, 'ShowServices']);
Route::get('/service-detail/{id}', [ClientController::class, 'ShowServiceDetail']);
Route::get('/Contact', [ClientController::class, 'ShowContact']);
Route::get('/review', [ClientController::class, 'ShowReview']);
Route::post('/review-store', [ClientController::class, 'ReviewStore'])->name('review.store');

// BOOKINGS
Route::post('/booking-store', [BookingsController::class, 'store']);

// BACKEND ROUTES
Route::get('/dashboard', [AdminController::class, 'ShowDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// send mail 
Route::post('/send-email', [ClientController::class, 'sendEmail'])->name('send.email');


Route::middleware('auth')->group(function () {
    //SERVICES
    Route::get('/services', [ServiceController::class, 'ShowServices'])->name('services');
    Route::get('/add-services', [ServiceController::class, 'AddServices'])->name('services.add');
    Route::post('/add-service-action', [ServiceController::class, 'AddServicesAction']);
    Route::get('/edit-service/{id}', [ServiceController::class, 'EditService'])->name('services.edit');
    Route::put('/edit-service-action/{id}', [ServiceController::class, 'EditServiceAction']);
    Route::get('/delete-service/{id}', [ServiceController::class, 'DeleteService']);
    Route::get('/active-service/{id}', [ServiceController::class, 'Set_Active_service']);
    Route::get('/unactive-service/{id}', [ServiceController::class, 'Set_UnActive_service']);

    //BOOKINGS
    Route::get('/all-bookings', [BookingsController::class, 'ShowBookings'])->name('bookings');
    Route::get('/bookings-detail/{id}', [BookingsController::class, 'ShowBookingsDetail'])->name('bookings.detail');
    Route::get('/set-confirmed/{id}', [BookingsController::class, 'SetConfirmed']);
    Route::get('/set-success/{id}', [BookingsController::class, 'SetSuccess']);
    Route::get('/set-canceled/{id}', [BookingsController::class, 'SetCanceled']);

    //ACCOUNT
    Route::get('/show-account', [AccountController::class, 'ShowAccount']);
    Route::get('/update-account', [AccountController::class, 'UpdateAccount']);
    Route::put('/edit-account-action/{id}', [AccountController::class, 'EditAccount']);

    // REVIEWS
    Route::get('/show-review', [PageController::class, 'ShowReview']);
    Route::get('/active-review/{id}', [PageController::class, 'Set_Active_review']);
    Route::get('/unactive-review/{id}', [PageController::class, 'Set_UnActive_review']);
    Route::get('/delete-review/{id}', [PageController::class, 'DeleteReview']);

    // IMAGES 
    Route::get('/show-images', [ImageController::class, 'ShowImages']);
    Route::get('/add-images', [ImageController::class, 'AddImages']);
    Route::post('/add-image-action', [ImageController::class, 'AddImagesAction']);
    Route::get('/delete-image/{id}', [ImageController::class, 'DeleteImage']);
});
require __DIR__ . '/auth.php';
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
Route::fallback(function () {
    return response()->view('errors.500', [], 500);
});
