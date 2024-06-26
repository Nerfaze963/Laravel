<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FerrysController;
use App\Http\Controllers\EquipementController;




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
    return view('accueil');
})->name('accueil');

Route::middleware(['auth', 'verified'])->group(function(){
Route::resource('ferrys', FerrysController::class);
Route::resource('equipement', EquipementController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('/pdf',[FerrysController::class,'creerPDF'])->name("pdf");

});

require __DIR__.'/auth.php';
