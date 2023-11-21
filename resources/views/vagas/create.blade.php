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
                <select class="form-control" name="empresa_id" required>
                <option value="">Selecione uma empresa</option>
                    @foreach($empresas as $empresa)
                        <option value="{{ $empresa->id }}">{{ $empresa->nome }}</option>
                    @endforeach
                </select>
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
            <!-- Insere div timestamp?-->
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('vagas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>