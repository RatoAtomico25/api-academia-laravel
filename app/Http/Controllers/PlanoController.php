<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    // GET /api/planos - lista todos os planos
    public function index()
    {
        return response()->json(Plano::all());
    }

    // POST /api/planos - insere um plano novo
    public function store(Request $request)
    {
        $plano = Plano::create($request->all());

        return response()->json($plano, 201);
    }
}
