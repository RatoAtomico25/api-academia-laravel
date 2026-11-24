<?php

namespace Database\Seeders;

use App\Models\Matricula;
use Illuminate\Database\Seeder;

class AcademiaSeeder extends Seeder
{
    public function run(): void
    {
        Matricula::create(['nome_aluno' => 'Maria Silva', 'plano' => 'Mensal',     'data_inicio' => '2026-11-01', 'status' => 'ativa']);
        Matricula::create(['nome_aluno' => 'Joao Souza',  'plano' => 'Anual',      'data_inicio' => '2026-01-10', 'status' => 'ativa']);
        Matricula::create(['nome_aluno' => 'Ana Costa',   'plano' => 'Trimestral', 'data_inicio' => '2026-05-15', 'status' => 'inativa']);
    }
}