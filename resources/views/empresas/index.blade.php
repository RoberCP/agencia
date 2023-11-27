<x-app-layout>
    <div class="container">
        {{-- <h1>Empresas</h1> --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <br>
        <form action="{{ route('empresas.index') }}" method="GET" class="search-form">
            <div class="search-container">
                <input type="text" name="search" placeholder="Pesquisar empresas..." value="{{ request()->query('search') }}" class="search-input">
                <button type="submit" class="search-button">Pesquisar</button>
            </div>
        </form>
        <a href="{{ route('empresas.create') }}" class="btn btn-primary">Nova Empresa</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CNPJ</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresas as $empresa)
                    <tr>
                        <td class="colunas">{{ $empresa->id }}</td>
                        <td id="cnpj">{{ $empresa->cnpj }}</td>
                        <td id="nome">{{ $empresa->nome }}</td>
                        <td id="cidade_id">{{ $empresa->cidade_id }}</td>
                        <td>
                            <a href="{{ route('empresas.show', $empresa->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $empresas->links() }}
    </div>
</x-app-layout>
