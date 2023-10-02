<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidato', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('nome');
            $table->date('dtNasc');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('email');
            $table->string('sexo',1);
=======
            $table->string('cpf');
            $table->string('nome');
            $table->date('dataNasc');
            $table->string('telefone');
            $table->string('genero');
            $table->unsignedBigInteger('cidade_id');
>>>>>>> migrations
            $table->timestamps();

            $table->foreign('cidade_id')->references('id')->on('cidade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidato');
    }
};
