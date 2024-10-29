<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ClientController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

// Contact route
Route::get('/contact', function () {
    return 'Fatma Elfilali';
});


Route::group(['middleware' => ['auth']], function () {
 
    Route::get('/home', [ClientController::class, "index"])->name('home');
    

    Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant');
    Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
    Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
    Route::get('/etudiant/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiant.edit');
    Route::put('/etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
    Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'delete'])->name('etudiant.delete');
});
