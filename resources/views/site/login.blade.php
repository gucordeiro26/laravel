@extends('site.layouts.basico')

@section('titulo', 'Página de Login')
    
@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Página Login</h1>
    
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6 border">
                @component('site.layouts._components.form_login', ['dark' => 'bg-light'])@endcomponent
            </div>
        </div>
    </div>

@endsection