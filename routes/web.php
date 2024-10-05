<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCastsController;
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

    Route::get('/admin/casts', [CastsController::class, 'index'])->name('cast.index');
    Route::get('/admin/casts/create', [CastsController::class, 'create'])->name('cast.create');
    Route::post('/admin/casts', [CastsController::class, 'store'])->name('cast.store');
    Route::get('/admin/casts/{id}/edit', [CastsController::class, 'edit'])->name('cast.edit');
    Route::put('/admin/casts/{id}', [CastsController::class, 'update'])->name('cast.update');
    Route::delete('/admin/casts/{id}', [CastsController::class, 'delete'])->name('cast.delete');

    Route::get('/admin/sub_casts', [SubCastsController::class, 'index'])->name('sub_cast.index');
    Route::get('/admin/sub_casts/create', [SubCastsController::class, 'create'])->name('sub_cast.create');
    Route::post('/admin/sub_casts', [SubCastsController::class, 'store'])->name('sub_cast.store');
    Route::get('/admin/sub_casts/{id}/edit', [SubCastsController::class, 'edit'])->name('sub_cast.edit');
    Route::put('/admin/sub_casts/{id}', [SubCastsController::class, 'update'])->name('sub_cast.update');
    Route::delete('/admin/sub_casts/{id}', [SubCastsController::class, 'delete'])->name('sub_cast.delete');


});


require __DIR__.'/auth.php';
