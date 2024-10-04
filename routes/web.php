<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RolesPermissionsController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/test', [RolesPermissionsController::class, 'index']);


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth', 'permission']], function() {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
});


require __DIR__.'/auth.php';
