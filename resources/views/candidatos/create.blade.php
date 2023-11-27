<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Candidatos</title>
        <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    </head>

    <body>
        <div class="container">
            <h1>Cadastrar Candidato</h1>
            <form action="{{ route('candidatos.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="id">Id:</label>
                    <input type="text" name="id" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" required>
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="dataNasc">Data de Nascimento:</label>
                    <input type="date" name="dataNasc" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" required>
                </div>
                <div class="form-group">
                <label for="genero">Gênero:</label>
                <div>
                  <input  type="radio" name="genero" value="F" required> <span class="genero">Feminino</span>
                  <input type="radio" name="genero" value="M" required> <span class="genero">Masculino</span>
                 </div>
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
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('candidatos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>