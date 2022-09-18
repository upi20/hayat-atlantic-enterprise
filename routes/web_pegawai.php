<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;

$name = 'pegawai';
Route::get('/dashboard', [DashboardController::class, 'index'])->name("$name.dashboard");

$prefix = "password";
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // pegawai.password
    Route::get('/', 'change_password')->name($name);
    Route::post('/save', 'save_password')->name("$name.save");
});
