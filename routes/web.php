<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentInformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CET-dashboard', function () {
    return view('CET.dashboard');
})->middleware(['auth', 'verified'])->name('CET.dashboard');

Route::get('CET/dashboard', [dashboardController::class, 'dashboard'])->name('CET.dashboard');

Route::get('CET/Inventory/Book-Dashboard', [InventoryController::class, 'book'])->name('CET.inventory.book.book-dashboard');

Route::get('CET/student-dashboard', [StudentInformationController::class, 'studentInformation'])->name('CET.student_information.student-dashboard');

Route::get('CET/Inventory/Equipment-Dashboard', [EquipmentController::class, 'equipments'])->name('CET.inventory.equipment.equipment-dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
