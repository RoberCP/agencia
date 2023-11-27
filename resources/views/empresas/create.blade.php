<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Empresas</title>
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    </head>
    
    <body>
    <div class="container">
        <h1>Cadastrar Empresas:</h1>
        <form action="{{ route('empresas.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" name="id">
            </div>
            <div class="form-group">
    <label for="cnpj">CNPJ:</label>
    <input type="text" name="cnpj">
</div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
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
            <!-- Insere div timestamp?-->
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('empresas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</x-app-layout>


