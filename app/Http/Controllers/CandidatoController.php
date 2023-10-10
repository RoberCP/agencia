<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class CandidatoController extends Controller
{
    // Mostra uma visão geral dos registros
    public function index()
    {
        // Obtém todas as Candidato do banco de dados
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
        $candidatos = Candidato::all();

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

    // Exibe um registro específico
    public function show(string $id)
    {
        // Encontra uma Candidato no banco de dados com o ID fornecido
        $candidato = Candidato::findOrFail($id);
        // Retorna a view 'Candidatos.show' e passa a Candidato como parâmetro
        return view('candidatos.show', compact('candidato'));
    }

    // Formulário de edição de um registro
    public function edit(string $id)
    {
        // Encontra uma Candidato no banco de dados com o ID fornecido
        $candidato = Candidato::findOrFail($id);
        // Retorna a view 'Candidatos.edit' e passa a Candidato como parâmetro
        return view('candidatos.edit', compact('candidato'));
    }

    // Recebe os dados do formulário de edição e atualiza no banco de dados
    public function update(Request $request, string $id)
    {
        $candidato = Candidato::findOrFail($id);
        // Atualiza os campos da Candidato com os dados fornecidos no request
        $candidato->id = $request->input('id');
        $candidato->nome = $request->input('nome');
        $candidato-> dataNasc = $request->input('dataNasc');
        $candidato-> telefone = $request->input('telefone');
        $candidato->genero = $request->input('genero');
        // Salva as alterações
        $candidato->save();
        // Redireciona para a rota 'Candidatos.index' após salvar
        return redirect()->route('candidatos.index');
    }

    // Exclui um registro
    public function destroy(string $id)
    {
        $candidato = Candidato::findOrFail($id);
        // Exclui a Candidato do banco de dados
        $candidato->delete();
        // Redireciona para a rota 'Candidatos.index' após salvar
        return redirect()->route('candidatos.index');
    }
}