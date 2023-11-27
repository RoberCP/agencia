<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Empresa</title>
        <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    </head>

    <body>
        <div class="container">
            <h1>Editar Empresa</h1>
            <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="cnpj">CNPJ:</label>
                    <input type="text" name="cnpj" value="{{ $empresa->cnpj }}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $empresa->nome }}">
                </div>
                <div class="form-group">
                <label for="cidade_id">Cidade:</label>
                <select class="form-control" name="cidade_id" required>
                <option value="">Selecione uma cidade</option>
                    @foreach($cidades as $cidade)
                        <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                    @endforeach
                </select>
            </div>

                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('empresas.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>