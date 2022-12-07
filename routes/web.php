<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'user-access:administrator'])->group(function () {
    Route::get('/admin.navbar', [App\Http\Controllers\administrator\NavbarsController::class, 'index'])->name('admin.navbar');
    Route::get('/admin.dashboard', [App\Http\Controllers\administrator\DashboardController::class, 'index'])->name('admin.dashboard');
});
Route::middleware(['auth', 'user-access:doctor'])->group(function () {
    Route::get('/doctor.dashboard', [App\Http\Controllers\doctor\DashboardController::class, 'index'])->name('doctor.dashboard');
});
Route::middleware(['auth', 'user-access:pharmacist'])->group(function () {
    Route::get('/pharmacist.dashboard', [App\Http\Controllers\pharmacist\DashboardController::class, 'index'])->name('pharmacist.dashboard');
});
Route::middleware(['auth', 'user-access:patient'])->group(function () {
    Route::get('/patient.dashboard', [App\Http\Controllers\patient\DashboardController::class, 'index'])->name('patient.dashboard');
});