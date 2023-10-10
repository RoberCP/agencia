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
        Schema::create('inscricao', function (Blueprint $table) {
            $table->id();
            $table->date('dataInscricao');
            $table->string('statusForms');
            $table->string('statusInscricao');
            $table->unsignedBigInteger('candidato_id');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('cidade_id');
            $table->timestamps();

            $table->foreign('candidato_id')->references('id')->on('candidato');
            $table->foreign('empresa_id')->references('id')->on('empresa');
            $table->foreign('cidade_id')->references('id')->on('cidade');        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscricao');
    }
};
