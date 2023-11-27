<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Cidades</title>
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    </head>

    <body>
        <div class="container">
            <h1>Cadastrar Cidades:</h1>
            <form action="{{ route('cidades.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="id">Id:</label>
                    <input type="text" name="id" required>
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="uf">UF:</label>
                    <input type="text" name="uf" required>
                </div>
                <!-- Insere div timestamp?-->
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('cidades.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>