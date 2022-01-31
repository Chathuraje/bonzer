<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\inquiryController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/inquiry', function () {
//     return view('admin.inquiry.inquiry');
// })->name('inquiry');

// Route::middleware(['auth:sanctum', 'verified'])->get('/itinerary', function () {
//     return view('admin.itinerary.itinerary');
// })->name('itinerary');

// Route::middleware(['auth:sanctum', 'verified'])->get('/quotation', function () {
//     return view('admin.quotation.quotation');
// })->name('quotation');

// Route::middleware(['auth:sanctum', 'verified'])->get('/customers', function () {
//     return view('admin.customers.customers');
// })->name('customers');

// Route::middleware(['auth:sanctum', 'verified'])->get('/invoices', function () {
//     return view('admin.invoices.invoices');
// })->name('invoices');

// Route::middleware(['auth:sanctum', 'verified'])->get('/bookings', function () {
//     return view('admin.bookings.bookings');
// })->name('bookings');

// Route::middleware(['auth:sanctum', 'verified'])->get('/accounts', function () {
//     return view('admin.accounts');
// })->name('accounts');

// Route::middleware(['auth:sanctum', 'verified'])->get('/reconciliation', function () {
//     return view('admin.reconciliation.reconciliation');
// })->name('reconciliation');

// Route::middleware(['auth:sanctum', 'verified'])->get('/reports', function () {
//     return view('admin.reports.reports');
// })->name('reports');

// Route::middleware(['auth:sanctum', 'verified'])->get('/settings', function () {
//     return view('admin.settings');
// })->name('settings');



// Route::middleware(['auth:sanctum', 'verified'])->get('/addnewinquiry', function () {
//     return view('admin.inquiry.addnewinquiry');
// })->name('addnewinquiry');

// Route::middleware(['auth:sanctum', 'verified'])->get('/importinquiry', function () {
//     return view('admin.inquiry.importinquiry');
// })->name('importinquiry');



// Route::middleware(['auth:sanctum', 'verified'])->get('/addnewitinerary', function () {
//     return view('admin.itinerary.addnewitinerary');
// })->name('addnewitinerary');

// Route::middleware(['auth:sanctum', 'verified'])->get('/importitinerary', function () {
//     return view('admin.itinerary.importitinerary');
// })->name('importitinerary');


// Route::middleware(['auth:sanctum', 'verified'])->get('/itinerarydetails', function () {
//     return view('admin.itinerary.itinerarydetails');
// })->name('itinerarydetails');


// Route::middleware(['auth:sanctum', 'verified'])->get('/addnewquotation', function () {
//     return view('admin.quotation.addnewquotation');
// })->name('addnewquotation');

// Route::middleware(['auth:sanctum', 'verified'])->get('/importquotation', function () {
//     return view('admin.quotation.importquotation');
// })->name('importquotation');


// Route::middleware(['auth:sanctum', 'verified'])->get('/quotationdetails', function () {
//     return view('admin.quotation.quotationdetails');
// })->name('quotationdetails');



// Route::middleware(['auth:sanctum', 'verified'])->get('/addnewcustomer', function () {
//     return view('admin.customers.addnewcustomer');
// })->name('addnewcustomer');



// Route::middleware(['auth:sanctum', 'verified'])->get('/importcustomers', function () {
//     return view('admin.customers.importcustomers');
// })->name('importcustomers');




// Route::middleware(['auth:sanctum', 'verified'])->get('/addflight', function () {
//     return view('admin.itinerary.parts.add.addflight');
// })->name('addflight');

// Route::middleware(['auth:sanctum', 'verified'])->get('/addhotel', function () {
//     return view('admin.itinerary.parts.add.addhotel');
// })->name('addhotel');

// Route::middleware(['auth:sanctum', 'verified'])->get('/addcustomitem', function () {
//     return view('admin.itinerary.parts.add.addcustomitem');
// })->name('addcustomitem');

// Route::middleware(['auth:sanctum', 'verified'])->get('/addactivity', function () {
//     return view('admin.itinerary.parts.add.addactivity');
// })->name('addactivity');

// Route::middleware(['auth:sanctum', 'verified'])->get('/addtransfer', function () {
//     return view('admin.itinerary.parts.add.addtransfer');
// })->name('addtransfer');


// Route::middleware(['auth:sanctum', 'verified'])->get('/editcustomer', function () {
//     return view('admin.customers.editcustomer');
// })->name('editcustomer');



Route::resource('customer', customerController::class);
Route::resource('inquiry', inquiryController::class);
Route::resource('itinerary', itineraryController::class);
Route::resource('quotation', quotationController::class);




