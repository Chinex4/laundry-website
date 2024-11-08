<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/prices', [HomeController::class, 'prices'])->name('prices');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/dryCleaning', [HomeController::class, 'dryCleaning'])->name('dryCleaning');
Route::get('/steamIron', [HomeController::class, 'steamIron'])->name('steamIron');
Route::get('/laundryService', [HomeController::class, 'laundryService'])->name('laundryService');
Route::get('/stainRemoval', [HomeController::class, 'stainRemoval'])->name('stainRemoval');
Route::get('/curtainsWash', [HomeController::class, 'curtainsWash'])->name('curtainsWash');
Route::get('/commercialLaundry', [HomeController::class, 'commercialLaundry'])->name('commercialLaundry');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
