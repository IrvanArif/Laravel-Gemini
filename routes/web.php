<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Arahkan halaman utama ke HomeController method index
Route::get('/', [HomeController::class, 'index']);