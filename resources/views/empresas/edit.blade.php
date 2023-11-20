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

        h1 {
            color: #fff;
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
        <title>Editar Empresa</title>
    </head>

    <body>
        <div class="container">
            <h1>Editar Empresa</h1>
            <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Id:</label>
                    <input type="text" name="id" value="{{ $empresa->id }}">
                </div>
                <div class="form-group">
                    <label for="uf">CNPJ:</label>
                    <input type="text" name="cnpj" value="{{ $empresa->cnpj }}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $empresa->nome }}">
                </div>
                <div class="form-group">
                    <label for="nome">Cidade:</label>
                    <input type="text" name="cidade" value="{{ $empresa->cidade }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('empresas.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>