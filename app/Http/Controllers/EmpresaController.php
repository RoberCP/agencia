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
        $empresas = Empresa::all();
        
        // Cria uma nova instância do model 'empresa' com os dados fornecidos no request
        $empresa = new Empresa([
            'nome' => $request->input('nome'),
            'uf' => $request->input('uf')
        ]);
        // Salva no banco de dados
        $empresa->save();
        return redirect()->route('empresas.index');
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
        $empresa = Empresa::findOrFail($id);
        // Atualiza os campos da empresa com os dados fornecidos no request
        $empresa->id = $request->input('id');
        $empresa->nome = $request->input('nome');
        $empresa->uf = $request->input('uf');
        // Salva as alterações
        $empresa->save();
        // Redireciona para a rota 'empresas.index' após salvar
        return redirect()->route('empresas.index');
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
