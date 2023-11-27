<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Candidato</title>
        <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    </head>

    <body>
    <body>
        <div class="container">
            <h1>Editar Candidato</h1>
            <form action="{{ route('candidatos.update', $candidato->id) }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="cnpj">Nome:</label>
                    <input type="text" name="cnpj" value="{{ $candidato->cnpj }}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $candidato->nome }}">
                </div>
                <div class="form-group">
                    <label for="">:</label>
                    <input type="text" name="" value="{{ $candidato-> }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('empresas.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
    </body>
</x-app-layout>