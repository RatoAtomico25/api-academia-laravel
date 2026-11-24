<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // GET /api/alunos - lista todos os alunos
    public function index()
    {
        return response()->json(Aluno::all());
    }

    // POST /api/alunos - insere um aluno novo
    public function store(Request $request)
    {
        $aluno = Aluno::create($request->all());

        return response()->json($aluno, 201);
    }
}
