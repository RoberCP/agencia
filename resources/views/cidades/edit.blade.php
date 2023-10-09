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
        <title>Editar Cidade</title>
    </head>

    <body>
        <div class="container">
            <h1>Editar Cidade</h1>
            <form action="{{ route('autores.update', $cidade->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Id:</label>
                    <input type="text" name="id" value="{{ $cidade->id }}">
                </div>
                <div class="form-group">
                    <label for="nome">Data de Nascimento:</label>
                    <input type="text" name="nome" value="{{ $cidade->nome }}">
                </div>
                <div class="form-group">
                    <label for="uf">UF:</label>
                    <input type="text" name="uf" value="{{ $cidade->uf }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('autores.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>