@extends('site.layouts.basico')
{{-- Por padrão extends aponta para a pasta View --}}

@section('titulo', $pagina . 'Fornecedores')

@section('conteudo')

    <div class="row content-adc container-fluid py-3">
        <div class="col-12">
            {{-- MENU --}}
            <div class="content-adc-menu mt-4 row d-flex justify-content-center">
                <div class="col-12 col-lg-6 text-center">
                    <a class="btn btn-outline-dark btn-lg me-3" href="{{ route('app.fornecedor.adicionar') }}">Cadastrar Fornecedor</a>
                    <a class="btn btn-outline-secondary btn-lg" href="{{ route('app.fornecedor') }}">Pesquisar Fornecedores</a>
                </div>
            </div>

            {{-- FORMULÁRIO --}}
            <div class="content-adc-form row d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="card shadow-lg border-0">
                        <div class="card-header text-black text-center">
                            <h3 class="mb-0 font-weight-bold">Fornecedor</h3>
                        </div>
                        <div class="card-body p-4">
                            <form action={{ route('app.fornecedor.adicionar') }} method="POST">
                                <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                                @csrf
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" placeholder="Nome do Fornecedor" class="form-control" value={{ $fornecedor->nome ?? old('nome') }}>
                                <h5>{{ $errors->has('nome') ? $errors->first('nome') : '' }}</h5>
                        
                                <label for="site">Site</label>
                                <input type="text" name="site" id="site" placeholder="E-mail" class="form-control" value={{ $fornecedor->site ?? old('site') }}>
                                <h5>{{ $errors->has('site') ? $errors->first('site') : '' }}</h5>

                                <label for="uf">UF</label>
                                <input type="text" name="uf" id="uf" placeholder="Estado" class="form-control" value={{ $fornecedor->uf ?? old('uf') }}>
                                <h5>{{ $errors->has('uf') ? $errors->first('uf') : '' }}</h5>

                                <label for="email">E-mail</label>
                                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control" value={{ $fornecedor->email ?? old('email') }}>
                                <h5>{{ $errors->has('email') ? $errors->first('email') : '' }}</h5>
                        
                        
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
            
                                <h5>
                                    {{ isset($erro) && $erro != '' ? $erro : '' }}
                                </h5>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection