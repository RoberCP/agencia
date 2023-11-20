<x-app-layout>
    <div class="candidato-details-layout">
        <link rel="stylesheet" href="{{ asset('css/candidatos.css') }}">
        <h1>Detalhes do Candidato</h1>
        <ul>
            <li><strong>CPF:</strong> {{ $candidato->cpf }}</li>
            <li><strong>Nome:</strong> {{ $candidato->nome }}</li>
            <li><strong>Data de Nascimento:</strong> {{ date_format(new DateTime($candidato->data_nascimento), 'd/m/Y') }}</li>
            <li><strong>Telefone:</strong> {{  $candidato->telefone }}</li>
            <li><strong>Gênero:</strong> {{  $candidato->genero }}</li>
            <li><strong>Cidade:</strong> {{  $candidato->cidade }}</li>
        </ul>
        <a href="{{ route('candidatos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>