<?php

namespace App\Http\Controllers;

use App\Models\Matricula;

class MatriculaController extends Controller
{
    // GET /api/matriculas/resumo - duas informacoes calculadas da tabela
    public function resumo()
    {
        return response()->json([
            'total_matriculas'  => Matricula::count(),
            'matriculas_ativas' => Matricula::where('status', 'ativa')->count(),
        ]);
    }
}
