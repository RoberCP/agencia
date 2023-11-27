<x-app-layout>
    <container>
    <div class="empresa-details-layout">
        <link rel="stylesheet" href="{{ asset('css/show.css') }}">
        <h1>Detalhes da empresa</h1>
        <ul>
            <li><strong>ID:</strong> {{ $empresa->id }}</li>
            <li><strong>CNPJ:</strong> {{ $empresa->cnpj }}</li>
            <li><strong>Nome:</strong> {{ $empresa->nome }}</li>
            <li><strong>Cidade:</strong> {{  $empresa->cidade }}</li>
        </ul>
        <button><a href="{{ route('empresas.index') }}" class="btn btn-secondary">Voltar</a></button>
        
    </div>
    </container>
    
</x-app-layout>