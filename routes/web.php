<?php

use App\Models\Medicines;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MedicineImport;

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
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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
    Route::get('/admin.viewalladmin', [App\Http\Controllers\administrator\viewAllAdmin::class, 'index'])->name('admin.ViewAlladministrator');
    Route::get('/admin.viewalladmin/json', [App\Http\Controllers\administrator\viewAllAdmin::class, 'json'])->name('admin.viewalladmin.json');
    Route::get('/admin.viewalldoctor', [App\Http\Controllers\administrator\viewAllDoctor::class, 'index'])->name('admin.ViewAllDoctor');
    Route::get('/admin.viewallpharmacist', [App\Http\Controllers\administrator\viewAllPharmacist::class, 'index'])->name('admin.ViewAllPharmacist');
    Route::get('/admin.viewallpatient', [App\Http\Controllers\administrator\viewAllPatient::class, 'index'])->name('admin.ViewAllPatient');
    Route::get('/admin.specialist', [App\Http\Controllers\administrator\addSpecialistCategory::class, 'index'])->name('admin.specialist');
    Route::get('/admin.specialist.add', [App\Http\Controllers\administrator\addSpecialistCategory::class, 'create'])->name('admin.specialist.add');
    Route::post('/admin.specialist', [App\Http\Controllers\administrator\addSpecialistCategory::class, 'store'])->name('admin.specialist.store');
    Route::get('/admin.specialist.edit/{id}', [App\Http\Controllers\administrator\addSpecialistCategory::class, 'edit'])->name('admin.specialist.edit');
    Route::post('/admin.specialist.update', [App\Http\Controllers\administrator\addSpecialistCategory::class, 'update'])->name('admin.specialist.update');
    Route::get('/admin.specialist.delete/{id}', [App\Http\Controllers\administrator\addSpecialistCategory::class, 'destroy'])->name('admin.specialist.delete');
    Route::get('/admin.dashboard/appointment', [App\Http\Controllers\administrator\MyAppointment::class, 'index'])->name('admin.appointment');
    Route::post('/admin.dashboard/appointment', [App\Http\Controllers\administrator\MyAppointment::class, 'store'])->name('admin.appointment.store');
    Route::get('/admin.dashboard/appointment.update/{id}', [App\Http\Controllers\administrator\MyAppointment::class, 'update'])->name('admin.appointment.update');
    Route::get('/admin.dashboard/appointment.delete/{id}', [App\Http\Controllers\administrator\MyAppointment::class, 'destroy'])->name('admin.appointment.delete');
    Route::get('/admin.dashboard/website.monthly.report', [App\Http\Controllers\administrator\MonthlyReportController::class, 'appointmentReport'])->name('admin.monthly.report');
    Route::get('/admin.dashboard/website.monthly.report/staff/print-pdf', [App\Http\Controllers\administrator\MonthlyReportController::class, 'appointmentStaffReportPrintPDF'])->name('admin.monthly.report.staffprint.pdf');
    Route::get('/admin.dashboard/website.monthly.report/appointment/print-pdf', [App\Http\Controllers\administrator\MonthlyReportController::class, 'appointmentReportPrintPDF'])->name('admin.monthly.report.print.pdf');
    Route::get('admin.dashboard.services', [App\Http\Controllers\administrator\ServiceController::class, 'index'])->name('admin.services');
    Route::get('admin.dashboard.services.add', [App\Http\Controllers\administrator\ServiceController::class, 'create'])->name('admin.services.add');
    Route::post('admin.dashboard.services', [App\Http\Controllers\administrator\ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('admin.dashboard.services.edit/{id}', [App\Http\Controllers\administrator\ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::post('admin.dashboard.services.update', [App\Http\Controllers\administrator\ServiceController::class, 'update'])->name('admin.services.update');
    Route::get('admin.dashboard.services.delete/{id}', [App\Http\Controllers\administrator\ServiceController::class, 'destroy'])->name('admin.services.delete');
    Route::get('admin.invoices', [App\Http\Controllers\administrator\InvoiceController::class, 'index'])->name('admin.invoices');
    Route::get('admin.invoice.detail/{id}', [App\Http\Controllers\administrator\InvoiceController::class, 'show'])->name('admin.invoice.detail');
    Route::get('admin.invoice.detail.delete/{id}', [App\Http\Controllers\administrator\InvoiceController::class, 'destroy'])->name('admin.invoice.delete');
    Route::get('admin.invoice.detail./{id}/printPDF', [App\Http\Controllers\administrator\InvoiceController::class, 'printPDF'])->name('admin.invoice.printPDF');
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
    Route::get('/doctor.queue', [App\Http\Controllers\doctor\appointmentQueue::class, 'index'])->name('doctor.queue');
    Route::get('/doctor.queue.delete/{id}', [App\Http\Controllers\doctor\appointmentQueue::class, 'destroy'])->name('doctor.queue.delete');
    Route::get('/doctor.medicalrecord', [App\Http\Controllers\doctor\medicalRecordBook::class, 'index'])->name('doctor.medicalrecordBook');
    Route::get('/doctor.medicalrecord.addRecord/{id}', [App\Http\Controllers\doctor\medicalRecordBook::class, 'makeNewRecord'])->name('doctor.medicalrecordBook.addRecord');
    Route::post('doctor.medicalrecord.addRecord', [App\Http\Controllers\doctor\medicalRecordBook::class, 'recordPrescription'])->name('doctor.medicalrecordBook.recordPrescription');
    Route::post('/doctor.medicalrecord.saverecord', [App\Http\Controllers\doctor\medicalRecordBook::class, 'saveRecord'])->name('doctor.medicalrecordBook.saverecord');
    Route::get('/doctor.medicalrecord.list', [App\Http\Controllers\doctor\medicalRecordBook::class, 'index'])->name('doctor.medicalrecordBook.list');
    Route::post('/doctor.medicalrecord.addcategory', [App\Http\Controllers\doctor\medicalRecordBook::class, 'addNewCategory'])->name('doctor.medicalrecordBook.addcategory');
    Route::get('/doctor.medicalrecord.edit/{id}', [App\Http\Controllers\doctor\medicalRecordBook::class, 'edit'])->name('doctor.medicalrecordBook.edit');
    Route::post('/doctor.medicalrecord.update', [App\Http\Controllers\doctor\medicalRecordBook::class, 'update'])->name('doctor.medicalrecordBook.update');
    Route::get('doctor.medicalrecord.detailview/{id}', [App\Http\Controllers\doctor\medicalRecordBook::class, 'viewMedicalRecordDetail'])->name('doctor.medicalrecordBook.detailview');
    Route::get('/doctor.medicalrecord.detailview.delete/{id}', [App\Http\Controllers\doctor\medicalRecordBook::class, 'deletePrescription'])->name('doctor.medicalrecordBook.detailView.delete');
    Route::get('/doctor.medicalrecord.addRecord.request/{id}', [App\Http\Controllers\doctor\medicalRecordBook::class, 'requestPrescription'])->name('doctor.medicalrecordBook.addRecord.request');
    Route::post('/doctor.medicalrecord.transactionAdd', [App\Http\Controllers\doctor\medicalRecordBook::class, 'addTransaction'])->name('doctor.medicalrecordBook.transactionAdd');
});
Route::middleware(['auth', 'user-access:pharmacist'])->group(function () {
    Route::get('/pharmacist.dashboard', [App\Http\Controllers\pharmacist\DashboardController::class, 'index'])->name('pharmacist.dashboard');
    Route::get('/pharmacist.profile', [App\Http\Controllers\pharmacist\MyprofileController::class, 'index'])->name('pharmacist.profile');
    Route::get('/pharmacist.profile.edit', [App\Http\Controllers\pharmacist\UpdateProfileController::class, 'edit'])->name('pharmacist.profile.edit');
    Route::put('/pharmacist.profile.update', [App\Http\Controllers\pharmacist\UpdateProfileController::class, 'update'])->name('pharmacist.profile.update');
    Route::delete('/pharmacist.profile.delete', [App\Http\Controllers\pharmacist\UpdateProfileController::class, 'destroy'])->name('pharmacist.profile.delete');
    Route::get('/pharmacist.medicines', [App\Http\Controllers\pharmacist\manageMedicinesController::class, 'index'])->name('pharmacist.medicines');
    Route::get('/pharmacist.medicines.add', [App\Http\Controllers\pharmacist\manageMedicinesController::class, 'create'])->name('pharmacist.medicines.add');
    Route::post('/pharmacist.medicines.store', [App\Http\Controllers\pharmacist\manageMedicinesController::class, 'store'])->name('pharmacist.medicines.store');
    Route::get('/pharmacist.medicines.edit/{id}', [App\Http\Controllers\pharmacist\manageMedicinesController::class, 'edit'])->name('pharmacist.medicines.edit');
    Route::post('/pharmacist.medicines.update', [App\Http\Controllers\pharmacist\manageMedicinesController::class, 'update'])->name('pharmacist.medicines.update');
    Route::get('/pharmacist.medicines.delete/{id}', [App\Http\Controllers\pharmacist\manageMedicinesController::class, 'destroy'])->name('pharmacist.medicines.delete');
    Route::post('/pharmacist.medicines.import', [App\Http\Controllers\pharmacist\manageMedicinesController::class, 'import'])->name('pharmacist.medicines.import');
    Route::get('/pharmacist.recipes', [App\Http\Controllers\pharmacist\RecipeController::class, 'index'])->name('pharmacist.recipes');
    Route::get('/pharmacist.view.prescription', [App\Http\Controllers\pharmacist\PrescriptionController::class, 'index'])->name('pharmacist.view.prescription');
    Route::get('/pharmacisst.view.prescription.detail/{id}', [App\Http\Controllers\pharmacist\PrescriptionController::class, 'show'])->name('pharmacist.view.prescription.detail');
});

Route::middleware(['auth', 'user-access:patient'])->group(function () {
    Route::get('/patient.dashboard', [App\Http\Controllers\patient\DashboardController::class, 'index'])->name('patient.dashboard');
    Route::get('/patient.dashboard/search', [App\Http\Controllers\patient\DashboardController::class, 'search'])->name('patient.dashboard.search');
    Route::get('/patient.dashboard/filter', [App\Http\Controllers\patient\DashboardController::class, 'filter'])->name('patient.dashboard.filter');
    Route::get('/patient.profile', [App\Http\Controllers\patient\MyprofileController::class, 'index'])->name('patient.profile');
    Route::get('/patient.profile.edit', [App\Http\Controllers\patient\UpdateProfileController::class, 'edit'])->name('patient.profile.edit');
    Route::put('/patient.profile.update', [App\Http\Controllers\patient\UpdateProfileController::class, 'update'])->name('patient.profile.update');
    Route::delete('/patient.profile.delete', [App\Http\Controllers\patient\UpdateProfileController::class, 'destroy'])->name('patient.profile.delete');
    Route::get('/patient.view.doctor', [App\Http\Controllers\patient\ViewDoctorController::class, 'index'])->name('patient.view.doctor');
    Route::get('/patient.view.detail.doctor/{id}', [App\Http\Controllers\patient\ViewDoctorController::class, 'show'])->name('patient.view.detail.doctor');
    Route::post('/patient.view.detail.doctor/', [App\Http\Controllers\patient\ViewDoctorController::class, 'store'])->name('patient.view.detail.doctor.store');
    Route::get('/patient.medicalrecord', [App\Http\Controllers\patient\MedicalRecordControler::class, 'index'])->name('patient.medicalrecordBook');
    Route::get('/patient.appointment', [App\Http\Controllers\patient\MyAppointment::class, 'index'])->name('patient.appointment');
    Route::post('/patient.appointment/', [App\Http\Controllers\patient\MyAppointment::class, "store"])->name('patient.appointment.store');
    Route::get('/patient.appointment.delete/{id}', [App\Http\Controllers\patient\MyAppointment::class, 'destroy'])->name('patient.appointment.delete');
    Route::get('/patient.view.prescription', [App\Http\Controllers\patient\PrescriptionController::class, 'index'])->name('patient.view.prescription');
    Route::get('/patient.view.prescription.detail/{id}', [App\Http\Controllers\patient\PrescriptionController::class, 'show'])->name('patient.view.prescription.detail');
    Route::get('/patient.review', [App\Http\Controllers\patient\ReviewController::class, 'index'])->name('patient.review');
    Route::get('/patient.review.create/{id}', [App\Http\Controllers\patient\ReviewController::class, 'create'])->name('patient.review.create');
    Route::post('/patient.review.store', [App\Http\Controllers\patient\ReviewController::class, 'store'])->name('patient.review.store');
    Route::get('patient.payment', [App\Http\Controllers\patient\PaymentController::class, 'index'])->name('patient.payment');
    Route::get('patient.payment.detail/{id}', [App\Http\Controllers\patient\PaymentController::class, 'show'])->name('patient.payment.detail');
    Route::post('patient.payment.detail', [App\Http\Controllers\patient\PaymentController::class, 'payment_post'])->name('patient.payment.detail.store');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
