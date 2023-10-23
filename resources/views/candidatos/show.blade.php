<x-app-layout>
    <div class="candidato-details-layout">
        <link rel="stylesheet" href="{{ asset('css/candidatos.css') }}">
        <h1>Detalhes do Candidato</h1>
        <ul>
            <li><strong>ID:</strong> {{ $candidato->cpf }}</li>
            <li><strong>Nome:</strong> {{ $autor->nome }}</li>
            <li><strong>Nacionalidade:</strong> {{  $autor->nacionalidade }}</li>
            <li><strong>Data de Nascimento:</strong> {{ date_format(new DateTime($autor->data_nascimento), 'd/m/Y') }}</li>
        </ul>
        <a href="{{ route('autores.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>