<body>
    <div class="container">
        <h1>Novas Inscrições:</h1>
        <form action="{{ route('vagas.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" name="id">
            </div>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao">
            </div>
            <div class="form-group">
                <label for="tipoContratacao">Tipo de Contratação:</label>
                <input type="text" name="tipoContratacao">
            </div>
            <div class="form-group">
                <label for="empresa_id">Empresa:</label>
                <input type="text" name="empresa_id">
            </div>
            <div class="form-group">
                <label for="cidade_id">Cidade:</label>
                <input type="text" name="cidade_id">
            </div>
            <!-- Insere div timestamp?-->
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('vagas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>