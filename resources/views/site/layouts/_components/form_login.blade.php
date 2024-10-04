<form action={{ route('site.login') }} method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="email">E-mail</label>
        <input class="form-control" type="text" name="email" id="email" value={{ old('email') }}>
        {{ $errors->has('email') ? $errors->first('email') : '' }}
    </div>
    
    <div class="mb-3">
        <label class="form-label" for="password">Senha</label>
        <input class="form-control" type="password" name="password" id="password" value={{ old('password') }}>
        {{ $errors->has('password') ? $errors->first('password') : '' }}
    </div>

    <button type="submit" class="btn btn-secondary mb-3">Acessar</button>

    {{ isset($erro) && $erro != '' ? $erro : '' }}
</form>