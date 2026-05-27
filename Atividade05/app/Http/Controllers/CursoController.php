<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return "Lista de cursos";
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function listagem()
    {
        $cursos = [
            "Cozinha",
            "Confeitaria",
            "Reciclagem"
        ];

        return view('cursos.listagem', compact('cursos'));
    }
}