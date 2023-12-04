<?php

use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
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
    if (Auth::check()) {
        // Utilisateur connecté, redirige vers la page d'accueil de l'administration
        return redirect()->route('admin');
    } else {
        // Utilisateur non connecté, redirige vers la page de connexion
        return view('auth.login');
    }
});
// routes/web.php
Route::middleware(['auth'])->group(function () {
    Route::get('admin/register', [RegisterController::class, 'registerAdmin'])->name('admin/register');
    Route::post('admin/register', [RegisterController::class, 'storeAdmin'])->name('admin/register');

    Route::get('admin/users', [RegisterController::class, 'index'])->name('admin/users');
    Route::get('admin/user/update/{id}', [RegisterController::class, 'update']);
    Route::post('admin/user/edit', [RegisterController::class, 'edit'])->name('admin/user/edit'); //Enregistrer departement
    Route::get('admin/user/delete/{id}', [RegisterController::class, 'delete']);

    // ------------------------------Vehicule ---------------------------------------
    Route::get('admin/vehicule', [App\Http\Controllers\Admin\Vehicules\VehiculesController::class, 'create'])->name('admin/vehicule');
    Route::get('admin/vehicules', [App\Http\Controllers\Admin\Vehicules\VehiculesController::class, 'index'])->name('admin/vehicules');
    Route::post('admin/vehicule', [App\Http\Controllers\Admin\Vehicules\VehiculesController::class, 'store'])->name('admin/vehicule');

    // ------------------------------Marques ---------------------------------------
    Route::get('admin/marque', [App\Http\Controllers\Admin\Marques\MarqueController::class, 'create'])->name('admin/marque');
    Route::get('admin/marques', [App\Http\Controllers\Admin\Marques\MarqueController::class, 'index'])->name('admin/marques');
    Route::post('admin/marque', [App\Http\Controllers\Admin\Marques\MarqueController::class, 'store'])->name('admin/marque');

    // ------------------------------Type de véhicles ---------------------------------------
    Route::get('admin/type-vehicule', [App\Http\Controllers\Admin\TypesVehicule\TypesVehiculeController::class, 'create'])->name('admin/type-vehicule');
    Route::get('admin/types-vehicule', [App\Http\Controllers\Admin\TypesVehicule\TypesVehiculeController::class, 'index'])->name('admin/types-vehicule');
    Route::post('admin/type-vehicule', [App\Http\Controllers\Admin\TypesVehicule\TypesVehiculeController::class, 'store'])->name('admin/type-vehicule');

    // ------------------------------Demarcheur ---------------------------------------
    Route::get('admin/demarcheurs', [App\Http\Controllers\Admin\Auth\UserController::class, 'demarcheurList'])->name('admin/demarcheurs');

    // ------------------------------Clients ---------------------------------------
    Route::get('admin/clients', [App\Http\Controllers\Admin\Auth\UserController::class, 'clientList'])->name('admin/clients');

    // ------------------------------Importateurs ---------------------------------------
    Route::get('admin/importer', [App\Http\Controllers\Admin\Importateurs\ImportateurController::class, 'create'])->name('admin/importer');
    Route::get('admin/importers', [App\Http\Controllers\Admin\Importateurs\ImportateurController::class, 'index'])->name('admin/importers');
    Route::post('admin/importer', [App\Http\Controllers\Admin\Importateurs\ImportateurController::class, 'store'])->name('admin/importer');

    // ------------------------------Dashboard ---------------------------------------
    Route::get('/', [HomeController::class, 'index'])->name('admin');
   
    // ------------------------------Logout ---------------------------------------
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');
});
