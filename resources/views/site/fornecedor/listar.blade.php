@extends('site.layouts.basico')
{{-- Por padrão extends aponta para a pasta View --}}

@section('titulo', $pagina . 'Fornecedores')

@section('conteudo')

    <div class="container-fluid">
        
        {{-- MENU --}}
        <div class="row d-flex justify-content-center mb-4 mt-4">
            <div class="col-12 col-lg-6 text-center">
                <a class="btn btn-outline-dark btn-lg me-3" href="{{ route('app.fornecedor.adicionar') }}">Cadastrar Fornecedor</a>
                <a class="btn btn-outline-secondary btn-lg" href="{{ route('app.fornecedor') }}">Pesquisar Fornecedores</a>
            </div>
        </div>

        {{-- FORMULÁRIO --}}
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="row card shadow">
                    <div class="col-12 card-header">
                        Fornecedor
                    </div>
                    <div class="col-12 card-body">
                        
                        {{-- Tabela Bootstrap --}}
                        <table class="table table-striped table-hover">
                            <thead class="row d-flex justify-content-center align-items-center">
                                <tr class="col-12 d-flex justify-content-center align-items-center text-center">
                                    <th class="col-3">Nome</th>
                                    <th class="col-3">Site</th>
                                    <th class="col-1">UF</th>
                                    <th class="col-3">E-mail</th>
                                    <th class="col-2">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="row d-flex justify-content-center align-items-center">
                                @foreach($fornecedores as $fornecedor)
                                    <tr class="col-12 d-flex justify-content-center align-items-center text-center">
                                        <td class="col-3">{{ $fornecedor->nome }}</td>
                                        <td class="col-3">{{ $fornecedor->site }}</td>
                                        <td class="col-1">{{ $fornecedor->uf }}</td>
                                        <td class="col-3">{{ $fornecedor->email }}</td>
                                        <td class="col-2 d-flex justify-content-center align-items-center">
                                            <a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}" class="btn btn-md btn-warning">Editar</a>
                                            <a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}" class="btn btn-md btn-danger">Excluir</a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="5">
                                        {{ $fornecedores->links() }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        {{ $fornecedores->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
