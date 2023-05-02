<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::resource('tickets', \App\Http\Controllers\TicketController::class)
    ->name('index', 'tickets.index')
    ->name('show', 'tickets.show')
    ->name('create', 'tickets.create')
    ->name('store', 'tickets.store')
    ->name('destroy', 'tickets.destroy');
