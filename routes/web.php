<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;

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
    return view('welcome');
});


// ------------------------------admin register---------------------------------------
Route::get('admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'registerAdmin'])->name('admin/register');
Route::get('admin/users', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'index'])->name('admin/users');
Route::post('admin/register', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'storeAdmin'])->name('admin/register');
Route::get('admin/user/update/{id}', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'update']);
Route::post('admin/user/edit', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'edit'])->name('admin/user/edit'); //Enregistrer departement

Route::get('admin/user/delete/{id}', [App\Http\Controllers\Admin\Auth\RegisterController::class, 'delete']);

// ------------------------------admin register---------------------------------------

// ------------------------------Vehicule ---------------------------------------
Route::get('admin/vehicule', [App\Http\Controllers\Admin\Vehicules\VehiculesController::class, 'create'])->name('admin/vehicule');
Route::get('admin/vehicules', [App\Http\Controllers\Admin\Vehicules\VehiculesController::class, 'index'])->name('admin/vehicules');
Route::post('admin/vehicule', [App\Http\Controllers\Admin\Vehicules\VehiculesController::class, 'store'])->name('admin/vehicule');

// ------------------------------admin register---------------------------------------


// ------------------------------Demarcheur ---------------------------------------
Route::get('admin/demarcheurs', [App\Http\Controllers\Admin\Auth\UserController::class, 'demarcheurList'])->name('admin/demarcheurs');

// ------------------------------Demarcheur---------------------------------------

// ------------------------------Clients ---------------------------------------
Route::get('admin/clients', [App\Http\Controllers\Admin\Auth\UserController::class, 'clientList'])->name('admin/clients');

// ------------------------------Clients---------------------------------------



// ------------------------------Importateurs ---------------------------------------
Route::get('admin/importer', [App\Http\Controllers\Admin\Importateurs\ImportateurController::class, 'create'])->name('admin/importer');
Route::get('admin/importers', [App\Http\Controllers\Admin\Importateurs\ImportateurController::class, 'index'])->name('admin/importers');
Route::post('admin/importer', [App\Http\Controllers\Admin\Importateurs\ImportateurController::class, 'store'])->name('admin/importer');

// ------------------------------Importateurs---------------------------------------



// Fortify::loginView(function () {
//     return view('auth.login');
// });

// Fortify::registerView(function () {
//     return view('auth.register');
// });
