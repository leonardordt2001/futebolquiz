<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\PerguntasController;

Route::get('/',[DispositivoController::class,'index'])->name('home');
Route::get('/home',[DispositivoController::class,'index'])->name('home23');
Route::get('/login',[DispositivoController::class,'logintela'])->name('login');
Route::get('/cadastrar',[DispositivoController::class,'cadastrotela'])->name('cadastrar');
Route::get('/records',[DispositivoController::class,'recordstela'])->name('records');
Route::get('/gerenciar-perguntas/{opcao}',[PerguntasController::class,'MostrarPerguntas'])->name('gerenciar-perguntas');
Route::post('/cadastrar-perguntas',[PerguntasController::class,'CadastrarPerguntas'])->name('Cadastrar-perguntas');
Route::post('/cadastrar',[PerguntasController::class,'Cadastrar'])->name('cadastrar');
