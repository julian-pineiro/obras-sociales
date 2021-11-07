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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboardCliente', function () {
    return view('dashboardCliente');
})->middleware(['auth'])->name('dashboardCliente');

Route::get('/features', function () {
    return view('features');
})->middleware(['auth'])->name('features');

Route::get('/plans', function () {
    return view('plans');
})->middleware(['auth'])->name('plans');

Route::get('/refunds', function () {
    return view('refunds');
})->middleware(['auth'])->name('refunds');

Route::get('/searchclients', function () {
    return view('searchClients');
})->middleware(['auth'])->name('searchclients');

Route::get('/family', function () {
    return view('family');
})->middleware(['auth'])->name('family');

Route::get('/users', function () {
    return view('users');
})->middleware(['auth'])->name('users');

require __DIR__.'/auth.php';
