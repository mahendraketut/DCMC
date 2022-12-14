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
    return view('auth.login');
});

Auth::routes();

//register admin route
Route::get('/admin.register', [App\Http\Controllers\Auth\RegisterAdminController::class, 'index'])->name('admin.register.page');
Route::post('/admin.register', [App\Http\Controllers\Auth\RegisterAdminController::class, 'store'])->name('admin.register.post');


//google login route
Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

//home page route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//password change route
Route::get('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'index'])->name('change.password.index');
Route::post('/change-password', [App\Http\Controllers\ChangePasswordController::class, 'store'])->name('change.password');

Route::middleware(['auth', 'user-access:administrator'])->group(function () {
    Route::get('/admin.navbar', [App\Http\Controllers\administrator\NavbarsController::class, 'index'])->name('admin.navbar');
    Route::get('/admin.dashboard', [App\Http\Controllers\administrator\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin.profile', [App\Http\Controllers\administrator\MyprofileController::class, 'index'])->name('admin.profile');
    Route::get('/admin.profile.edit', [App\Http\Controllers\administrator\UpdateProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::put('/admin.profile.update', [App\Http\Controllers\administrator\UpdateProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin.profile.delete', [App\Http\Controllers\administrator\UpdateProfileController::class, 'destroy'])->name('admin.profile.delete');
    Route::get('/admin.dashboard/register_doctor', [App\Http\Controllers\administrator\RegisterDoctorController::class, 'index'])->name('register_doctor');
    Route::get('/admin.dashboard/register_pharmacist', [App\Http\Controllers\administrator\RegisterPharmacistController::class, 'index'])->name('register_pharmacist');
    Route::post('/admin.dashboard/register_doctor', [App\Http\Controllers\administrator\RegisterDoctorController::class, 'registerDoctor']);
    Route::post('/admin.dashboard/register_pharmacist', [App\Http\Controllers\administrator\RegisterPharmacistController::class, 'registerPharmacist']);
    Route::get('/admin.dashboard/schedule', [App\Http\Controllers\administrator\ScheduleController::class, 'index'])->name('admin.schedule');
    Route::get('/admin.dashboard/schedule.add', [App\Http\Controllers\administrator\ScheduleController::class, 'create'])->name('admin.schedule.add');
    Route::get('/admin.dashboard/schedule.edit/{id}', [App\Http\Controllers\administrator\ScheduleController::class, 'edit'])->name('admin.schedule.edit');
    Route::get('/admin.dashboard/schedule.delete/{id}', [App\Http\Controllers\administrator\ScheduleController::class, 'destroy'])->name('admin.schedule.delete');
    Route::post('/admin.dashboard/schedule.update', [App\Http\Controllers\administrator\ScheduleController::class, 'update'])->name('admin.schedule.update');
    Route::post('/admin.dashboard/schedule.add', [App\Http\Controllers\administrator\ScheduleController::class, 'store'])->name('admin.schedule.store');
    Route::get('/admin.dashboard/proposed-admin', [App\Http\Controllers\administrator\ProposedAdminAccountController::class, 'index'])->name('admin.proposed');
    Route::get('/admin.dashboard/proposed-admin.approve/{id}', [App\Http\Controllers\administrator\ProposedAdminAccountController::class, 'approve'])->name('admin.proposed.approve');
    Route::get('/admin.dashboard/proposed-admin.reject/{id}', [App\Http\Controllers\administrator\ProposedAdminAccountController::class, 'reject'])->name('admin.proposed.reject');
});
Route::middleware(['auth', 'user-access:doctor'])->group(function () {
    Route::get('/doctor.dashboard', [App\Http\Controllers\doctor\DashboardController::class, 'index'])->name('doctor.dashboard');
    Route::get('/doctor.profile', [App\Http\Controllers\doctor\MyprofileController::class, 'index'])->name('doctor.profile');
    Route::get('/doctor.profile.edit', [App\Http\Controllers\doctor\UpdateProfileController::class, 'edit'])->name('doctor.profile.edit');
    Route::put('/doctor.profile.update', [App\Http\Controllers\doctor\UpdateProfileController::class, 'update'])->name('doctor.profile.update');
    Route::delete('/doctor.profile.delete', [App\Http\Controllers\doctor\UpdateProfileController::class, 'destroy'])->name('doctor.profile.delete');
    Route::get('/doctor.dashboard/schedule', [App\Http\Controllers\doctor\ScheduleController::class, 'index'])->name('doctor.schedule');
    Route::get('/doctor.dashboard/schedule.add', [App\Http\Controllers\doctor\ScheduleController::class, 'create'])->name('doctor.schedule.add');
    Route::get('/doctor.dashboard/schedule.edit/{id}', [App\Http\Controllers\doctor\ScheduleController::class, 'edit'])->name('doctor.schedule.edit');
    Route::get('/doctor.dashboard/schedule.delete/{id}', [App\Http\Controllers\doctor\ScheduleController::class, 'destroy'])->name('doctor.schedule.delete');
    Route::post('/doctor.dashboard/schedule.update', [App\Http\Controllers\doctor\ScheduleController::class, 'update'])->name('doctor.schedule.update');
    Route::post('/doctor.dashboard/schedule.add', [App\Http\Controllers\doctor\ScheduleController::class, 'store'])->name('doctor.schedule.store');
});
Route::middleware(['auth', 'user-access:pharmacist'])->group(function () {
    Route::get('/pharmacist.dashboard', [App\Http\Controllers\pharmacist\DashboardController::class, 'index'])->name('pharmacist.dashboard');
    Route::get('/pharmacist.profile', [App\Http\Controllers\pharmacist\MyprofileController::class, 'index'])->name('pharmacist.profile');
    Route::get('/pharmacist.profile.edit', [App\Http\Controllers\pharmacist\UpdateProfileController::class, 'edit'])->name('pharmacist.profile.edit');
    Route::put('/pharmacist.profile.update', [App\Http\Controllers\pharmacist\UpdateProfileController::class, 'update'])->name('pharmacist.profile.update');
    Route::delete('/pharmacist.profile.delete', [App\Http\Controllers\pharmacist\UpdateProfileController::class, 'destroy'])->name('pharmacist.profile.delete');
});
Route::middleware(['auth', 'user-access:patient'])->group(function () {
    Route::get('/patient.dashboard', [App\Http\Controllers\patient\DashboardController::class, 'index'])->name('patient.dashboard');
    Route::get('/patient.profile', [App\Http\Controllers\patient\MyprofileController::class, 'index'])->name('patient.profile');
    Route::get('/patient.profile.edit', [App\Http\Controllers\patient\UpdateProfileController::class, 'edit'])->name('patient.profile.edit');
    Route::put('/patient.profile.update', [App\Http\Controllers\patient\UpdateProfileController::class, 'update'])->name('patient.profile.update');
    Route::delete('/patient.profile.delete', [App\Http\Controllers\patient\UpdateProfileController::class, 'destroy'])->name('patient.profile.delete');
    Route::get('/patient.view.doctor', [App\Http\Controllers\patient\ViewDoctorController::class, 'index'])->name('patient.view.doctor');
    Route::get('/patient.view.detail.doctor/{id}', [App\Http\Controllers\patient\ViewDoctorController::class, 'show'])->name('patient.view.detail.doctor');
});