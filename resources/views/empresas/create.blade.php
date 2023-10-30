<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Empresas</title>
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
                display: block;
                font-weight: bold;
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
                border: 1px solid #3a0d0d;
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
                <input type="text" name="cidade_id">
            </div>
            <!-- Insere div timestamp?-->
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('empresas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</x-app-layout>


