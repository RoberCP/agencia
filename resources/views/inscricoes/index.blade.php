<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/inscrições/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de inscrições</h1> --}}
        <br>
        <a href="{{ route('inscrições.create') }}" class="btn btn-primary">Novo Inscrições</a>
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
                @foreach ($inscrições as $Inscrições)
                    <tr>
                        <td class="colunas">{{ $Inscrições->id }}</td>
                        <td id="dataInscricao">{{ (date_format(new DateTime $Inscrições->dataInscricao), 'd/m/Y') }}</td>
                        <td class="colunas">{{ $Inscrições->statusInscricao}}</td>
                        <td>{{ $Inscrições->candidato_id }}</td>
                        <td>{{ $Inscrições->empresa_id }}</td>
                        <td>{{ $Inscrições->cidade_id }}</td>
                        <td>
                            <a href="{{ route('inscrições.show', $Inscrições->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('inscrições.edit', $Inscrições->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('inscrições.destroy', $Inscrições->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $inscrições->links() }}
    </div>
</x-app-layout>

