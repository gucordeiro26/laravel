@extends('site.layouts.basico')

@section('titulo', $pagina . ' - Fornecedores')

@section('conteudo')
    @include('site.layouts._partials.menu')

    <div class="container-fluid py-3">
        
        {{-- MENU --}}
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-12 col-lg-6 text-center">
                <a class="btn btn-outline-primary btn-lg me-3" href="{{ route('app.fornecedor.adicionar') }}">Cadastrar Fornecedor</a>
                <a class="btn btn-outline-secondary btn-lg" href="{{ route('app.fornecedor') }}">Pesquisar Fornecedores</a>
            </div>
        </div>

        {{-- FORMULÁRIO --}}
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header text-black text-center">
                        <h3 class="mb-0 font-weight-bold">Fornecedor</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('app.fornecedor.listar') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="nome" class="form-label font-weight-bold">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control form-control-lg" placeholder="Nome do Fornecedor" value="{{ old('nome') }}">
                                @if($errors->has('nome'))
                                    <small class="text-danger">{{ $errors->first('nome') }}</small>
                                @endif
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label font-weight-bold">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="E-mail do Fornecedor" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-8 mb-4">
                                    <label for="site" class="form-label font-weight-bold">Site</label>
                                    <input type="url" name="site" id="site" class="form-control form-control-lg" placeholder="Site do Fornecedor" value="{{ old('site') }}">
                                    @if($errors->has('site'))
                                        <small class="text-danger">{{ $errors->first('site') }}</small>
                                    @endif
                                </div>
    
                                <div class="col-4 mb-4">
                                    <label for="uf" class="form-label font-weight-bold">UF</label>
                                    <input type="text" name="uf" id="uf" class="form-control form-control-lg" placeholder="Estado" value="{{ old('uf') }}">
                                    @if($errors->has('uf'))
                                        <small class="text-danger">{{ $errors->first('uf') }}</small>
                                    @endif
                                </div>
                            </div>
                    
                            <button type="submit" class="btn btn-primary btn-lg w-100 font-weight-bold">Consultar</button>

                            @if(isset($erro) && $erro != '')
                                <div class="alert alert-danger mt-4">{{ $erro }}</div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
