<x-app-layout>
    <style>
        container {
    background-color: white;
    display: flex;
    margin: 40px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 24px;
    margin-bottom: 15px;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    margin-bottom: 8px;
}

strong {
    font-weight: bold;
}

button {
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
        
}

    </style>
    <container>
    <div class="empresa-details-layout">
        <link rel="stylesheet" href="{{ asset('css/empresas.css') }}">
        <h1>Detalhes da empresa</h1>
        <ul>
            <li><strong>ID:</strong> {{ $empresa->id }}</li>
            <li><strong>CNPJ:</strong> {{ $empresa->cnpj }}</li>
            <li><strong>Nome:</strong> {{ $empresa->nome }}</li>
            <li><strong>Cidade:</strong> {{  $empresa->cidade }}</li>
        </ul>
        <button><a href="{{ route('empresas.index') }}" class="btn btn-secondary">Voltar</a></button>
        
    </div>
    </container>
    
</x-app-layout>