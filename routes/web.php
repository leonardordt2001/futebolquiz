<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DispositivoController;

Route::get('/',[DispositivoController::class,'index'])->name('home');
Route::get('/login',[DispositivoController::class,'logintela'])->name('login');