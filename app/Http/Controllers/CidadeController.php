<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
    }

    // Formulário de edição de um registro
    public function edit(string $id)
    {
        //
    }

    // Recebe os dados do formulário de edição e atualiza no banco de dados
    public function update(Request $request, string $id)
    {
        //
    }

    // Exclui um registro
    public function destroy(string $id)
    {
        //
    }
}
