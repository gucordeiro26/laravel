@extends('site.layouts.basico')

@section('titulo', 'Página de Fornecedores')
    
@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Página Fornecedores</h1>

    @isset($fornecedores)
        @foreach($fornecedores as $indice => $fornecedor)
            <h3>Fornecedor:</h3> {{ $fornecedor['nome'] }}
            <h3>Status:</h3> {{ $fornecedor['status'] ?? 'Sem status definido' }}<hr/>
        @endforeach
    @endisset

    {{-- @dd($fornecedores) --}}

    @if (count($fornecedores) > 0 && count($fornecedores) < 10)
        <h3>Há alguns fornecedores cadastrados</h3>
    @elseif (count($fornecedores) > 10)
        <h3>Há muitos fornecedores cadastrados</h3>
    @else
        <h3>Não há fornecedores cadastrados</h3>
    @endif
@endsection

        
