<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    // Mostra uma visão geral dos registros
    public function index()
    {
        // Obtém todas as empresa do banco de dados
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    // Formulário para criar um novo registro
    public function create()
    {
        return view('empresas.create');
    }

    // Recebe os dados do formulário e salva no banco de dados
    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'É necessário preencher o campo nome.',
            'cidade.required' => 'É necessário preencher o campo cidade.'
        ];

        $request->validate([
            'nome' => 'required|string|max:100',
            'cidade' => 'required|exists:cidade,id' , // VER COMO FICA
        ], $messages);

        Empresa::create($request->all());
        
        return redirect()->route('empresas.index')->with('success', 'Empresa cadastrada com sucesso!');
    }

    // Exibe um registro específico
    public function show(string $id)
    {
        // Encontra uma empresa no banco de dados com o ID fornecido
        $empresa = Empresa::findOrFail($id);
        // Retorna a view 'empresas.show' e passa a empresa como parâmetro
        return view('empresas.show', compact('empresa'));
    }

    // Formulário de edição de um registro
    public function edit(string $id)
    {
        // Encontra uma empresa no banco de dados com o ID fornecido
        $empresa = Empresa::findOrFail($id);
        // Retorna a view 'empresas.edit' e passa a empresa como parâmetro
        return view('empresas.edit', compact('empresa'));
    }

    // Recebe os dados do formulário de edição e atualiza no banco de dados
    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'É necessário preencher o campo nome.',
            'cidade.required' => 'É necessário preencher o campo cidade.'
        ];

        $request->validate([
            'nome' => 'required|string|max:100',
            'cidade' => 'required|exists:cidade,id', 
        ], $messages);

        Empresa::update($request->all());

        // Redireciona para a rota 'empresas.index' após salvar
        return redirect()->route('empresas.index')->with('success', 'Empresa atualizada com sucesso!');
    }

    // Exclui um registro
    public function destroy(string $id)
    {
        $empresa = Empresa::findOrFail($id);
        // Exclui a empresa do banco de dados
        $empresa->delete();
        // Redireciona para a rota 'empresas.index' após salvar
        return redirect()->route('empresas.index');
    }
}
