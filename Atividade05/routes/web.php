<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

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

Route::get('/disciplinas', [DisciplinaController::class, 'index']);

Route::get('/disciplinas/create', [DisciplinaController::class, 'create']);

Route::post('/disciplinas/store', [DisciplinaController::class, 'store']);

Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);

Route::get('/produtos/create', [ProdutoController::class, 'create']);

Route::post('/produtos', [ProdutoController::class, 'store']);