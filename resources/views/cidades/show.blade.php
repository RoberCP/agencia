<x-app-layout>
    <container>
    <div class="details-layout">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
        <h1>Detalhes da Cidade</h1>
        <ul>
            <li><strong>ID:</strong> {{ $cidade->id }}</li>
            <li><strong>Nome:</strong> {{ $cidade->nome }}</li>
            <li><strong>UF:</strong> {{  $cidade->uf }}</li>
        </ul>
        <button><a href="{{ route('cidades.index') }}" class="btn btn-secondary">Voltar</a></button>     
    </div>
    </container>  
</x-app-layout>