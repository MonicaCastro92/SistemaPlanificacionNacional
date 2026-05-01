<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\EjeController;
use App\Http\Controllers\ObjetivoPndController;
use App\Http\Controllers\MetaPndController;
use App\Http\Controllers\ProyectoController;



Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('plans', PlanController::class);
    Route::resource('institucions', InstitucionController::class);
    Route::resource('ejes', EjeController::class);
    Route::resource('objetivo_pnds', ObjetivoPndController::class);
    Route::resource('meta_pnds', MetaPndController::class);
    Route::resource('proyectos', ProyectoController::class);
    });

require __DIR__.'/auth.php';
