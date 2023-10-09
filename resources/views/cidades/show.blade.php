<x-app-layout>
    <div class="cidade-details-layout">
        <link rel="stylesheet" href="{{ asset('css/cidades.css') }}">
        <h1>Detalhes da Cidade</h1>
        <ul>
            <li><strong>ID:</strong> {{ $cidade->id }}</li>
            <li><strong>Nome:</strong> {{ $cidade->nome }}</li>
            <li><strong>UF:</strong> {{  $cidade->uf }}</li>
        </ul>
        <a href="{{ route('cidades.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>