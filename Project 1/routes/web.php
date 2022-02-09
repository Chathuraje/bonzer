<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\inquiryController;
use App\Http\Controllers\itineraryController;
use App\Http\Controllers\quotationController;
use App\Http\Controllers\itinerarieDataController;
use App\Http\Controllers\DashboardController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('customer', customerController::class);
Route::resource('inquiry', inquiryController::class);
Route::resource('itinerary', itineraryController::class);
Route::resource('quotation', quotationController::class);


Route::get('/addHotel', function () {
    return view('admin.itinerary.parts.add.addHotel');
});

Route::get('/addFlight', function () {
    return view('admin.itinerary.parts.add.addFlight');
});

Route::get('/addCustomItem', function () {
    return view('admin.itinerary.parts.add.addCustomItem');
});

Route::get('/addActivity', function () {
    return view('admin.itinerary.parts.add.addActivity');
});

Route::get('/addTransfer', function () {
    return view('admin.itinerary.parts.add.addTransfer');
});


Route::resource('itinerarydata', itinerarieDataController::class);


Route::get('/addQHotel', function () {
    return view('admin.quatation.parts.add.addQHotel');
});

Route::get('/addQFlight', function () {
    return view('admin.quatation.parts.add.addQFlight');
});

Route::get('/addQCustomItem', function () {
    return view('admin.quatation.parts.add.addQCustomItem');
});

Route::get('/addQActivity', function () {
    return view('admin.quatation.parts.add.addQActivity');
});

Route::get('/addQTransfer', function () {
    return view('admin.quatation.parts.add.addQTransfer');
});





Route::resource('/dashboard', DashboardController::class);
