<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplinas = [
            "Bolos",
            "Salgados",
            "Pratos-principais"
        ];
//fiz esse código com fome
        return view('disciplinas.index', compact('disciplinas'));
    }

    public function create()
    {
        return view('disciplinas.create');
    }

    public function store(Request $request)
    {
        return "Disciplina cadastrada: " . $request->nome;
    }

    public function show($id)
    {
        return view('disciplinas.show', compact('id'));
    }
}