<body>
    <div class="container">
        <h1>Cadastrar Candidato</h1>
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
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('candidatos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>