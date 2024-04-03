<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Fornecedores</title>
</head>
<body>
    
    <ul>
        <li>
            <a href="{{ route('site/principal') }}">Principal</a>
        </li>
        <li>
            <a href="{{ route('site/sobrenos') }}">Sobre Nós</a>
        </li>
        <li>
            <a href="{{ route('site/contato') }}">Contato</a>
        </li>
        <li>
            <a href="{{ route('app/clientes') }}">Clientes</a>
        </li>
        <li>
            <a href="{{ route('app/produtos') }}">Produtos</a>
        </li>
        <li>
            <a href="{{ route('app/fornecedores') }}">Fornecedores</a>
        </li>
        <li>
            <a href="{{ route('site/login') }}">Login</a>
        </li>
    </ul>

</body>
</html>