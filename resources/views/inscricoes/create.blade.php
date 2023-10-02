<body>
    <div class="container">
        <h1>Novas Inscrições:</h1>
        <form action="{{ route('inscricoes.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
            @csrf
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" name="id">
            </div>
            <div class="form-group">
                <label for="dataInscricao">Data de Inscrição:</label>
                <input type="date" name="dataInscricao">
            </div>
            <div class="form-group">
                <label for="statusForms">Status:</label>
                <input type="text" name="statusForms">
            </div>
            <div class="form-group">
                <label for="statusInscricao">Situação da Inscrição:</label>
                <input type="text" name="statusInscricao>
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
            <!-- Insere div timestamp?-->
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('inscricoes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>