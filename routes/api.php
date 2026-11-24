<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PlanoController;
use Illuminate\Support\Facades\Route;

// Todas as rotas deste arquivo ganham o prefixo /api automaticamente

Route::get('/alunos', [AlunoController::class, 'index']);
Route::post('/alunos', [AlunoController::class, 'store']);

Route::get('/planos', [PlanoController::class, 'index']);
Route::post('/planos', [PlanoController::class, 'store']);

Route::get('/matriculas/resumo', [MatriculaController::class, 'resumo']);
