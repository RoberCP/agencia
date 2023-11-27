<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Candidato</title>
        <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    </head>

    <body>
        <div class="container">
            <h1>Editar Candidato</h1>
            <form action="{{ route('candidatos.update', $candidato->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" value="{{ $candidato->cpf }}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $candidato->nome }}">
                </div>
                <div class="form-group">
                    <label for="dataNasc">Data de Nascimento:</label>
                    <input type="text" name="dataNasc" value="{{ $candidato->dataNasc }}">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" value="{{ $candidato->telefone }}">
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

                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('candidatos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>