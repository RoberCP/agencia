<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;

class VagaController extends Controller
{
    
    public function index()
    {
        // Obtém todas as vagas do banco de dados
        $vagas = Vaga::all();
        return view('vagas.index', compact('vagas'));
    }

    public function create()
    {
        return view('vagas.create');
    }

    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'É necessário preencher o campo nome.',
            'descricao.required' => 'É necessário preencher o campo descrição.',
            'tipoContratacao.required' => 'É necessário preencher o campo tipo de contratação.',
            'empresa.required' => 'É necessário preencher o campo empresa.',
            'cidade.required' => 'É necessário preencher o campo cidade.',
        ];

        $request->validate([
            'nome' => 'required|string|max:100',
            'descricao' => 'required|string|max:300',
            'tipoContratacao' => 'required|string|60',
            'empresa' => 'required|exists:empresa,id',
            'cidade' => 'required|exists:cidade,id' , 
        ], $messages);

        Vaga::create($request->all());
        
        return redirect()->route('vagas.index')->with('success', 'Vaga cadastrada com sucesso!');
    }


    public function show(string $id)
    {
         // Encontra uma vaga no banco de dados com o ID fornecido
         $vaga = Vaga::findOrFail($id);
         // Retorna a view 'Candidatos.show' e passa a Candidato como parâmetro
         return view('vagas.show', compact('vaga'));
    }

    public function edit(string $id)
    {
        // Encontra uma vaga no banco de dados com o ID fornecido
        $empresa = Vaga::findOrFail($id);
        // Retorna a view 'vagas.edit' e passa a empresa como parâmetro
        return view('vagas.edit', compact('vagas'));
        
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'É necessário preencher o campo nome.',
            'descricao.required' => 'É necessário preencher o campo descrição.',
            'tipoContratacao.required' => 'É necessário preencher o campo tipo de contratação.',
            'empresa.required' => 'É necessário preencher o campo empresa.',
            'cidade.required' => 'É necessário preencher o campo cidade.',
        ];

        $request->validate([
            'nome' => 'required|string|max:100',
            'descricao' => 'required|string|max:300',
            'tipoContratacao' => 'required|string|60',
            'empresa' => 'required|exists:empresa,id',
            'cidade' => 'required|exists:cidade,id' , 
        ], $messages);

        Vaga::update($request->all());
        
        return redirect()->route('vagas.index')->with('success', 'Vaga atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        $vaga = Vaga::findOrFail($id);
        // Exclui a vaga do banco de dados
        $vaga->delete();
        // Redireciona para a rota 'vagas.index' após salvar
        return redirect()->route('vagas.index');
    }
}
