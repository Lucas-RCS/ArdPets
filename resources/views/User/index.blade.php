<x-layout title="Iniciar Sessão">
    <form>
        <div class="form-floating mb-3">
            <input type="email" name="LoginUserName" class="form-control is-invalid" id="floatingInput" placeholder="nome@example.com" required>
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="LoginUserPasswd" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Senha</label>
        </div>
        <div class="form-check-label"></div>
            <div class="row">
            <div class="col-13 g-3">
                <button type="submit" class="btn btn-primary">Continuar</button>
            </div>
            <div class="col-13 g-3">
                <a href="/criar-conta">
                    <button type="button" class="btn btn-primary">Registrar</button>
                </a>
            </div>
        </div>
    </form>
</x-layout>
