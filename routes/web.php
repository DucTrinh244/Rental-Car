<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


// FRONTEND ROUTES
Route::get('/home', [ClientController::class, 'index']);
Route::get('/About', [ClientController::class, 'ShowAbout']);
Route::get('/Services', [ClientController::class, 'ShowServices']);
Route::get('/Contact', [ClientController::class, 'ShowContact']);

// BACKEND ROUTES
Route::get('/dashboard', [AdminController::class, 'ShowDashboard'])->name('dashboard');

//SERVICES
Route::get('/services', [ServiceController::class, 'ShowServices'])->name('services');
Route::get('/add-services', [ServiceController::class, 'AddServices'])->name('services.add');
Route::post('/add-service-action', [ServiceController::class, 'AddServicesAction']);
Route::get('/edit-service/{id}', [ServiceController::class, 'EditService'])->name('services.edit');
Route::put('/edit-service-action/{id}', [ServiceController::class, 'EditServiceAction']);
Route::get('/delete-service/{id}', [ServiceController::class, 'DeleteService']);
Route::get('/active-service/{id}', [ServiceController::class, 'Set_Active_service']);
Route::get('/unactive-service/{id}', [ServiceController::class, 'Set_UnActive_service']);
