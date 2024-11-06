<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/plans', [App\Http\Controllers\Admin\PlanController::class, 'index'])->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});

//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');