{{ $slot }}

<form class="{{ $dark }}" action="{{ route('site.contato') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="nome">Nome Completo</label>
        <input class="form-control" type="text" name="nome" id="nome">
    </div>

    <div class="mb-3">
        <label class="form-label" for="email">E-mail</label>
        <input class="form-control" type="email" name="email" id="email">
    </div>

    <div class="mb-3">
        <label class="form-label" for="mensagem">Mensagem</label>
        <input class="form-control" type="text" name="mensagem" id="mensagem">
    </div>

    <div class="mb-3">
        <label class="form-label" for="telefone">Telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone">
    </div>

    <div class="mb-3">
        <select class="form-select" name="motivo" id="motivo">
            <option selected>Qual o motivo do contato?</option>
            <option value="1">Reclamação</option>
            <option value="2">Dúvida</option>
            <option value="3">Elogio</option>
        </select>
    </div>

    <button class="btn btn-secondary mb-3" type="submit">Enviar</button>
</form>

{{ print_r($errors) }}