<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Cidade;

class EmpresaController extends Controller
{
    // Mostra uma visão geral dos registros
    public function index(Request $request)
    {
        $search = $request->input('search');
        $empresas =  Empresa::where('nome', 'like', '%'.$search.'%')
        ->paginate(10);

        return view('empresas.index', compact('empresas'));
    }

    // Formulário para criar um novo registro
    public function create()
    {
        $cidades = Cidade::all();
        return view('empresas.create', compact('cidades'));
    }

    // Recebe os dados do formulário e salva no banco de dados
    public function store(Request $request)
    {
        $messages = [
            'cnpj.required' => 'É necessário preencher o campo CNPJ.',
            'nome.required' => 'É necessário preencher o campo nome.',
            'cidade_id.required' => 'É necessário preencher o campo cidade.'
        ];

        $request->validate([
            'cnpj' => 'required|string|max:14',
            'nome' => 'required|string|max:100',
            'cidade_id' => 'required|exists:cidade,id' , 
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
        $cidades = Cidade::all();
        // Retorna a view 'empresas.edit' e passa a empresa como parâmetro
        return view('empresas.edit', compact('empresa', 'cidades'));
    }

    // Recebe os dados do formulário de edição e atualiza no banco de dados
    public function update(Request $request, string $id)
    {
        $messages = [
            'cnpj.required' => 'É necessário preencher o campo CNPJ.',
            'nome.required' => 'É necessário preencher o campo nome.',
            'cidade_id.required' => 'É necessário preencher o campo cidade.'
        ];

        $request->validate([
            'cnpj' => 'required|string|max:14',
            'nome' => 'required|string|max:100',
            'cidade_id' => 'required|exists:cidade,id' ,
        ], $messages);

        $empresa = Empresa::findOrFail($id);
        // Atualize a cidade com os dados do request aqui
        $empresa->update($request->all());
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
