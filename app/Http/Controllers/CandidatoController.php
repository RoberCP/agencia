<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;
use App\Models\Cidade;

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
        $cidades = Cidade::all();
        return view('candidatos.create', compact('cidades'));
    }

    // Recebe os dados do formulário e salva no banco de dados
    public function store(Request $request)
    {
        $messages = [
            'cpf.required' => 'É necessário preencher o campo CPF.',
            'nome.required' => 'É necessário preencher o campo nome.',
            'dataNasc.required' => 'É necessário preencher o campo dataNasc.',
            'telefone.required' => 'É necessário preencher o campo telefone.',
            'genero.required' => 'É necessário preencher o campo genêro.',
            'cidade_id.required' => 'É necessário preencher o campo cidade.',
        ];

        $request->validate([
            'cpf' => 'required|string|11',
            'nome' => 'required|string|max:100',
            'dataNasc' => 'required|date', // VER COMO FICA
            'telefone' => 'required|string|9',
            'genero' => 'required|in:F,M',
            'cidade.required' => 'required|exists:cidade,id' // VER COMO FICA
        ], $messages);

        Candidato::create($request->all());

        return redirect()->route('candidatos.index')->with('success', 'Candidato cadastrado com sucesso!');
    }

    // Exibe um registro específico
    public function show(string $id)
    {
        // Encontra uma Candidato no banco de dados com o ID fornecido
        $candidatos = Candidato::findOrFail($id);
        // Retorna a view 'Candidatos.show' e passa a Candidato como parâmetro
        return view('candidatos.show', compact('candidatos'));
    }

    // Formulário de edição de um registro
    public function edit(string $id)
    {
        // Encontra uma Candidato no banco de dados com o ID fornecido
        $candidatos = Candidato::findOrFail($id);
        $cidades = Cidade::all();
        // Retorna a view 'Candidatos.edit' e passa a Candidato como parâmetro
        return view('candidatos.edit', compact('candidatos', 'cidades'));
    }

    // Recebe os dados do formulário de edição e atualiza no banco de dados
    public function update(Request $request, string $id)
    {
        $messages = [
            'cpf.required' => 'É necessário preencher o campo CPF.',
            'nome.required' => 'É necessário preencher o campo nome.',
            'dataNasc.required' => 'É necessário preencher o campo dataNasc.',
            'telefone.required' => 'É necessário preencher o campo telefone.',
            'genero.required' => 'É necessário preencher o campo genêro.',
            'cidade_id.required' => 'É necessário preencher o campo cidade.',
        ];

        $request->validate([
            'cpf' => 'required|string|11',
            'nome' => 'required|string|max:100',
            'dataNasc' => 'required|date', // VER COMO FICA
            'telefone' => 'required|string|9',
            'genero' => 'required|in:F,M',
            'cidade_id' => 'required|exists:cidade,id' // VER COMO FICA
        ], $messages);

        $candidato = Candidato::findOrFail($id);
        // Atualize a cidade com os dados do request aqui
        $candidato->update($request->all());
        // Redireciona para a rota 'Candidatos.index' após salvar
        return redirect()->route('candidatos.index')->with('success', 'Candidato atualizado com sucesso!');
    }

    // Exclui um registro
    public function destroy(string $id)
    {
        $candidato = Candidato::findOrFail($id);
        // Exclui a Candidato do banco de dados
        $candidato->delete();
        // Redireciona para a rota 'Candidatos.index' após salvar
        return redirect()->route('candidatos.index')->with('success', 'Vaga excluída com sucesso!');
    }
}