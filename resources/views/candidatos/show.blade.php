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
        <h1>Detalhes do Candidato</h1>
        <ul>
            <li><strong>CPF:</strong> {{ $candidato->cpf }}</li>
            <li><strong>Nome:</strong> {{ $candidato->nome }}</li>
            <li><strong>Data de Nascimento:</strong> {{ date_format(new DateTime($candidato->data_nascimento), 'd/m/Y') }}</li>
            <li><strong>Telefone:</strong> {{  $candidato->telefone }}</li>
            <li><strong>Gênero:</strong> {{  $candidato->genero }}</li>
            <li><strong>Cidade:</strong> {{  $candidato->cidade_id }}</li>
        </ul>
        <a href="{{ route('candidatos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
    </container>
    </body>
</x-app-layout>