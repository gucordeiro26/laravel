{{ $slot }}

<form class="{{ $dark }}" action="{{ route('site.contato') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="nome">Nome Completo</label>
        <input class="form-control" type="text" name="nome" id="nome">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    </div>

    <div class="mb-3">
        <label class="form-label" for="email">E-mail</label>
        <input class="form-control" type="email" name="email" id="email">
        {{ $errors->has('email') ? $errors->first('email') : '' }}
    </div>

    <div class="mb-3">
        <label class="form-label" for="mensagem">Mensagem</label>
        <input class="form-control" type="text" name="mensagem" id="mensagem">
        {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    </div>

    <div class="mb-3">
        <label class="form-label" for="telefone">Telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone">
        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    </div>

    <div class="mb-3">
        <select class="form-select" name="motivo_contato" id="motivo_contato">
            <option selected>Qual o motivo do contato?</option>
            <option value="1" {{ old('motivo_contato') == 1 ? 'selected' : '' }}>Elogio</option>
            <option value="2" {{ old('motivo_contato') == 2 ? 'selected' : '' }}>Dúvida</option>
            <option value="3" {{ old('motivo_contato') == 3 ? 'selected' : '' }}>Reclamação</option>
        </select>
        {{ $errors->has('motivo_contato') ? $errors->first('motivo_contato') : '' }}
    </div>

    <button class="btn btn-secondary mb-3" type="submit">Enviar</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
@endif