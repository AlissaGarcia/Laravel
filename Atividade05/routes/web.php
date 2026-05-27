<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos', [CursoController::class, 'index']);

Route::get('/cursos/novo', [CursoController::class, 'create']);

Route::get('/cursos/listagem', [CursoController::class, 'listagem']);

Route::get('/cursos/{id}', [CursoController::class, 'show']);

Route::get('/cursos/formulario', [CursoController::class, 'formulario']);

Route::post('/cursos/store', [CursoController::class, 'store']);

Route::resource('alunos', AlunoController::class);