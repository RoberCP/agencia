<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/candidatos/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Candidatos</h1> --}}
        <br>
        <a href="{{ route('candidatos.create') }}" class="btn btn-primary">Novo Candidato</a>
        <table class="table">
            <thead>
                <tr>
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
                        <td class="colunas">{{ $candidato->cpf }}</td>
                        <td id="nome">{{ $candidato->nome }}</td>
                        <td class="colunas">{{ date_format(new DateTime($candidato->data_nascimento), 'd/m/Y') }}</td>
                        <td>{{ $candidato->telefone }}</td>
                        <td>{{ $candidato->genero }}</td>
                        <td>{{ $candidato->cidade }}</td>
                        <td>
                            <a href="{{ route('candidatos.show', $candidato->cpf) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('candidatos.edit', $candidato->cpf) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('candidatos.destroy', $candidato->cpf) }}" method="POST" style="display: inline;">
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

