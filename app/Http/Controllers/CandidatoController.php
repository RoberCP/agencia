<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    // Mostra uma visão geral dos registros
    public function index()
    {
        // Obtém todos os candidatos do banco de dados
        $candidatos = Candidato::all();
        return view('candidatos.index', compact('candidatos'));
    }

    // Formulário para criar um novo registro
    public function create()
    {
        return view('candidatos.create');
    }

    // Recebe os dados do formulário e salva no banco de dados
    public function store(Request $request)
    {
        // Cria uma nova instância do model 'Candidato' com os dados fornecidos no request
        $candidato = new Candidato([
            'nome' => $request->input('nome'),
            'dataNasc' => $request->input('dataNasc'),
            'telefone' => $request->input('telefone'),
            'genero' => $request->input('genero'),
        ]);
        // Salva no banco de dados
        $candidato->save();
        return redirect()->route('candidatos.index');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
