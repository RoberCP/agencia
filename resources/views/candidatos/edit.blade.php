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

        h1 {
            color: #fff;
            font-weight: bold;
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