<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return "Lista de alunos";
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        return "Aluno salvo: " . $request->nome;
    }

    public function show(string $id)
    {
        return "Exibindo aluno ID: " . $id;
    }
}