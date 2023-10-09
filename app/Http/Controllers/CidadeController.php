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
        $cidades = Cidade::all();
        
        // Cria uma nova instância do model 'Cidade' com os dados fornecidos no request
        $cidade = new Cidade([
            'nome' => $request->input('nome'),
            'uf' => $request->input('uf')
        ]);
        // Salva no banco de dados
        $cidade->save();
        return redirect()->route('cidades.index');
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
        // Atualiza os campos da cidade com os dados fornecidos no request
        $cidade->id = $request->input('id');
        $cidade->nome = $request->input('nome');
        $cidade->uf = $request->input('uf');
        // Salva as alterações
        $cidade->save();
        // Redireciona para a rota 'cidades.index' após salvar
        return redirect()->route('cidades.index');
    }

    // Exclui um registro
    public function destroy(string $id)
    {
        $cidade = Cidade::findOrFail($id);
        // Exclui a cidade do banco de dados
        $cidade->delete();
        // Redireciona para a rota 'cidades.index' após salvar
        return redirect()->route('cidades.index');
    }
}
