<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_aluno');
            $table->string('plano');
            $table->date('data_inicio');
            $table->string('status'); // ex: ativa, inativa
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};