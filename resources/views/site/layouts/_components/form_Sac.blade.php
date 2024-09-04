{{ $slot }}

<form class="{{ $dark }}" action="{{ route('site.contato') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="nome">Nome Completo</label>
        <input class="form-control" type="text" name="nome" id="nome">
    </div>
    <div class="mb-3">
        <label class="form-label" for="mensagem">Mensagem</label>
        <input class="form_control" type="text" name="mensagem" id="mensagem">
    </div>

    <button class="btn btn-secondary mb-3" type="submit">Entrar em contato</button>
</form>