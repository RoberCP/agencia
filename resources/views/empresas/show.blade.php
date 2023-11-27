<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Candidatos</title>
        <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    </head>

    <body>
    <container>
    <div class="details-layout">
        <h1>Detalhes da empresa</h1>
        <ul>
            <li><strong>ID:</strong> {{ $empresa->id }}</li>
            <li><strong>CNPJ:</strong> {{ $empresa->cnpj }}</li>
            <li><strong>Nome:</strong> {{ $empresa->nome }}</li>
            <li><strong>Cidade:</strong> {{  $empresa->cidade_id }}</li>
        </ul>
        <button><a href="{{ route('empresas.index') }}" class="btn btn-secondary">Voltar</a></button>
        
    </div>
    </container>
    </body>
</x-app-layout>

