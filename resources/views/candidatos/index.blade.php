<x-app-layout>
    <style>
        .table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table th, .table td {
    padding: 8px;
    background-color: white;
    border: 1px solid #ccc;
    text-align: left;
}

.table th {
    background-color: #f2f2f2;
    font-weight: bold;
}

.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px;
}

.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

.btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}

.btn-warning {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
}

.btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
}
    </style>
    <div class="container">
        {{-- <h1>Listagem de Candidatos</h1> --}}
        <br>
        <a href="{{ route('cidades.create') }}" class="btn btn-primary">Novo Candidato</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>Gênero</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidatos as $candidato)
                    <tr>
                        <td class="colunas">{{ $candidato->id }}</td>
                        <td id="cpf">{{ $candidato->cpf }}</td>
                        <td id="nome">{{ $candidato->nome }}</td>
                        <td id="dataNasc">{{ $candidato->dataNasc }}</td>
                        <td id="telefone">{{ $candidato->telefone }}</td>
                        <td id="genero">{{ $candidato->genero }}</td>
                        <td id="cidade_id">{{ $candidato->cidade_id }}</td>
                        <td>
                            <a href="{{ route('candidatos.show', $candidato->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('candidatos.edit', $candidato->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('candidatos.destroy', $candidato->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
