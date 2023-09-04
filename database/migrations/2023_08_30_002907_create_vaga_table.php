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
        Schema::create('vaga', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->string('tipoContratacao');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('cidade_id');
            $table->timestamps();

            $table->foreign('empresa_id')->references('id')->on('empresa');
            $table->foreign('cidade_id')->references('id')->on('cidade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaga');
    }
};
