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
        <h1>Detalhes da Cidade</h1>
        <ul>
            <li><strong>ID:</strong> {{ $cidade->id }}</li>
            <li><strong>Nome:</strong> {{ $cidade->nome }}</li>
            <li><strong>UF:</strong> {{  $cidade->uf }}</li>
        </ul>
        <button><a href="{{ route('cidades.index') }}" class="btn btn-secondary">Voltar</a></button>     
    </div>
    </container>  
    </body>
</x-app-layout>