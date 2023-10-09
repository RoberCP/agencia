<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/autores/index.css') }}">
    <div class="container">
        {{-- <h1>Listagem de Cidades</h1> --}}
        <br>
        <a href="{{ route('autores.create') }}" class="btn btn-primary">Nova Cidade</a>
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
    </div>
</x-app-layout>
