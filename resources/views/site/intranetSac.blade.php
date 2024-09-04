@extends('site.layouts.basico')

@section('titulo', 'Página de SAC')
    
@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Página SAC</h1>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6 border">

                @component('site.layouts._components.form_Sac', ['dark' => 'bg-light'])
                    <p>A nossa equipe analisará o caso e entraremos em contato!</p>
                @endcomponent

            </div>
        </div>
    </div>
@endsection