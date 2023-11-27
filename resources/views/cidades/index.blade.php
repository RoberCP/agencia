<x-app-layout>
    <div class="container">
        {{-- <h1>Listagem de Cidades</h1> --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <br>
        <form action="{{ route('cidades.index') }}" method="GET" class="search-form">
            <div class="search-container">
                <input type="text" name="search" placeholder="Pesquisar cidades..." value="{{ request()->query('search') }}" class="search-input">
                <button type="submit" class="search-button">Pesquisar</button>
            </div>
        </form>
        <a href="{{ route('cidades.create') }}" class="btn btn-primary">Nova Cidade</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>UF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cidades as $cidade)
                    <tr>
                        <td class="colunas">{{ $cidade->id }}</td>
                        <td id="nome">{{ $cidade->nome }}</td>
                        <td>{{ $cidade->uf }}</td>
                        <td>
                            <a href="{{ route('cidades.show', $cidade->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('cidades.edit', $cidade->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('cidades.destroy', $cidade->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $cidades->links() }}
    </div>
</x-app-layout>
