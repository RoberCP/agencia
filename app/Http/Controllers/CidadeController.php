<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade;

class CidadeController extends Controller
{
    // Mostra uma visão geral dos registros
    public function index()
    {
        // Obtém todas as cidade do banco de dados
        $cidades = Cidade::all();
        return view('cidades.index', compact('cidades'));
    }

    // Formulário para criar um novo registro
    public function create()
    {
        return view('cidades.create');
    }

    // Recebe os dados do formulário e salva no banco de dados
    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'É necessário preencher o campo nome.',
            'uf.required' => 'É necessário preencher o campo UF.'
        ];

        $request->validate([
            'nome' => 'required|string|max:100',
            'uf' => 'required|string|max:2',
            
        ], $messages);

        Cidade::create($request->all());

        return redirect()->route('cidades.index')->with('success', 'Cidade criada com sucesso!');
    }

    // Exibe um registro específico
    public function show(string $id)
    {
        // Encontra uma cidade no banco de dados com o ID fornecido
        $cidade = Cidade::findOrFail($id);
        // Retorna a view 'cidades.show' e passa a cidade como parâmetro
        return view('cidades.show', compact('cidade'));
    }

    // Formulário de edição de um registro
    public function edit(string $id)
    {
        // Encontra uma cidade no banco de dados com o ID fornecido
        $cidade = Cidade::findOrFail($id);
        // Retorna a view 'cidades.edit' e passa a cidade como parâmetro
        return view('cidades.edit', compact('cidade'));
    }

    // Recebe os dados do formulário de edição e atualiza no banco de dados
    public function update(Request $request, string $id)
    {
        $cidade = Cidade::findOrFail($id);
        // Atualize a cidade com os dados do request aqui
        $cidade->update($request->all());
        // Redireciona para a rota 'cidades.index' após salvar
        return redirect()->route('cidades.index')->with('success', 'Cidade atualizada com sucesso!');
    }

    // Exclui um registro
    public function destroy($id)
    {
        $cidade = Cidade::findOrFail($id);
        // Exclui a cidade do banco de dados
        $cidade->delete();
        // Redireciona para a rota 'cidades.index' após salvar
        return redirect()->route('cidades.index')->with('success', 'Cidade excluída com sucesso!');
    }
}
