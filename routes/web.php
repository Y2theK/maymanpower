<?php


use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/*
|--------------------------------------------------------------------------
| Services
|--------------------------------------------------------------------------
*/

Route::resource('services', ServiceController::class)
    ->except(['show']);


/*
|--------------------------------------------------------------------------
| Booking Management
|--------------------------------------------------------------------------
*/

Route::get('/bookings', function () {
    return view('bookings.index');
})->name('bookings.index');


/*
|--------------------------------------------------------------------------
| Maid Profile
|--------------------------------------------------------------------------
*/

Route::get('/maids', function () {
    return view('maids.index');
})->name('maids.index');


/*
|--------------------------------------------------------------------------
| Staff Management
|--------------------------------------------------------------------------
*/

Route::get('/staff', function () {
    return view('staff.index');
})->name('staff.index');


/*
|--------------------------------------------------------------------------
| Customer Management
|--------------------------------------------------------------------------
*/

Route::get('/customers', function () {
    return view('customers.index');
})->name('customers.index');


/*
|--------------------------------------------------------------------------
| Payment
|--------------------------------------------------------------------------
*/

Route::get('/payments', function () {
    return view('payments.index');
})->name('payments.index');


/*
|--------------------------------------------------------------------------
| Reports
|--------------------------------------------------------------------------
*/

Route::get('/reports', function () {
    return view('reports.index');
})->name('reports.index');