<?php

use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('auth.login');
});

// routes/web.php
Route::middleware(['auth'])->group(function () {
    Route::get('admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'registerAdmin'])->name('admin/register');
    Route::post('admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'storeAdmin'])->name('admin/register');
    Route::get('admin/user/update/{id}', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'update']);
    Route::post('admin/user/edit', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'edit'])->name('admin/user/edit'); //Enregistrer departement

    Route::get('admin/user/delete/{id}', [RegisterController::class, 'delete']);

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
});


// ------------------------------admin register---------------------------------------
// Route::get('admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'registerAdmin'])->name('admin/register');
// Route::post('admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'storeAdmin'])->name('admin/register');
// Route::get('admin/user/update/{id}', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'update']);
// Route::post('admin/user/edit', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'edit'])->name('admin/user/edit'); //Enregistrer departement

// Route::get('admin/user/delete/{id}', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'delete']);

// ------------------------------admin register---------------------------------------





// Fortify::loginView(function () {
//     return view('auth.login');
// });

// Fortify::registerView(function () {
//     return view('auth.register');
// });
