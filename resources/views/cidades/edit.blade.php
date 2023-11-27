<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Cidade</title>
        <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    </head>

    <body>
        <div class="container">
            <h1>Editar Cidade</h1>
            <form action="{{ route('cidades.update', $cidade->id) }}" method="POST">
                @csrf
                @method('PUT')
              
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $cidade->nome }}">
                </div>
                <div class="form-group">
                    <label for="uf">UF:</label>
                    <input type="text" name="uf" value="{{ $cidade->uf }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('cidades.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>