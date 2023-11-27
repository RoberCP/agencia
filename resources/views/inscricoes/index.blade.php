<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/inscricoes/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Inscrições</h1> --}}
        <br>
        <a href="{{ route('inscricoes.create') }}" class="btn btn-primary">Novo Inscrições</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data de Inscrição</th>
                    <th>Status</th>
                    <th>Candidato</th>
                    <th>Empresa</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inscricoes as $inscricao)
                    <tr>
                        <td class="colunas">{{ $inscricao->id }}</td>
                        <td>{{ $inscricao->candidato_id }}</td>
                        <td>{{ $inscricao->empresa_id }}</td>
                        <td>{{ $inscricao->cidade_id }}</td>
                        <td>
                            <a href="{{ route('inscricoes.show', $inscricoes->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('inscricoes.edit', $inscricoes->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('inscricoes.destroy', $inscricoes->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $inscricoes->links() }}
    </div>
</x-app-layout>


