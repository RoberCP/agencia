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
        <title>Editar Inscrições</title>
    </head>

    <body>
        <div class="container">
            <h1>Editar Inscrições</h1>
            <form action="{{ route('inscrições.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" name="id">
                </div>
                <div class="form-group">
                    <label for="dataInscricao">Data de Inscrições:</label>
                    <input type="date" name="dataInscricao">
                </div>
                <div class="form-group">
                    <label for="statusInscricao">Status</label>
                    <input type="text" name="statusInscricao">
                </div>
                <div class="form-group">
                    <label for="candidato_id">Candidato:</label>
                    <input type="text" name="candidato_id">
                </div>
                <div class="form-group">
                    <label for="empresa_id">Empresa:</label>
                    <input type="text" name="empresa_id">
                </div>
                <div class="form-group">
                    <label for="cidade_id">Cidade:</label>
                    <input type="text" name="cidade_id">
                </div>
                <button type="submit" class="btn btn-success">Salvar alterações</button>
                <a href="{{ route('inscrições.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>