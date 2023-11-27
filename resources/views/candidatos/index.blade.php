<x-app-layout>
    </style>
    <div class="container">
        {{-- <h1>Listagem de Candidatos</h1> --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <br>
        <form action="{{ route('candidatos.index') }}" method="GET" class="search-form">
            <div class="search-container">
                <input type="text" name="search" placeholder="Pesquisar candidatos..." value="{{ request()->query('search') }}" class="search-input">
                <button type="submit" class="search-button">Pesquisar</button>
            </div>
        </form>
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
        {{ $candidatos->links() }}
    </div>
</x-app-layout>
