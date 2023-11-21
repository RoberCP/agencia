<x-app-layout>
    <div class="inscricoes-details-layout">
        <link rel="stylesheet" href="{{ asset('css/inscricoes.css') }}">
        <h1>Detalhes do Candidato</h1>
        <ul>
            <li><strong>ID:</strong> {{ $inscricoes->id }}</li>
            <li><strong>Data de Inscrição:</strong> {{ date_format(new DateTime($inscricoes->dataInscricao), 'd/m/Y') }}</li>
            <li><strong>Status da Inscrição:</strong> {{  $inscricoes->statusInscricao }}</li>
            <li><strong>Candidato:</strong> {{  $inscricoes->candidato_id}}</li>
            <li><strong>Empresa:</strong> {{  $inscricoes->empresa_id}}</li>
            <li><strong>Cidade:</strong> {{  $inscricoes->cidade_id }}</li>
        </ul>
        <a href="{{ route('inscricoes.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>