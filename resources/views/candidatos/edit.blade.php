<x-app-layout>
    <style>
        body {
            background-color: #fff;
            /* Fundo branco */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #fff;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-secondary {
            background-color: #6c757d;
        }
    </style>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Candidato</title>
    </head>

    <body>
        <div class="container">
            <h1>Editar Cadastro do Candidato</h1>
            <form action="{{ route('candidatos.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="dataNasc">Data de Nascimento:</label>
                    <input type="date" name="dataNasc">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone">
                </div>
                <div class="form-group">
                    <label for="genero">Gênero:</label>
                    <input type="text" name="genero">
                </div>
                <div class="form-group">
                    <label for="cidade_id">Cidade:</label>
                    <input type="text" name="cidade_id">
                </div>
                <button type="submit" class="btn btn-success">Salvar alterações</button>
                <a href="{{ route('candidatos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>