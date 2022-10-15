<x-layout title="Criar Conta">
    <form>
        <div class="form-floating mb-3">
            <input type="text" name="CreateUserName" class="form-control" id="floatingInput" placeholder="Nome" required>
            <label for="floatingInput">Nome</label>
        </div>
    <div class="form-floating mb-3">
        <input type="email" name="CreateUserEmail" class="form-control" id="floatingInput" placeholder="nome@example.com" required>
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
        <input type="password" name="CreateUserPasswd" class="form-control" id="floatingPassword" placeholder="Senha">
        <label for="floatingPassword">Senha</label>
        <div class="row">
            <div class="col-2 g-3">
                <button type="submit" class="btn btn-primary">Criar Conta</button>
            </div>
            <div class="col-13 g-3">
                <a href="/iniciar-sessao">
                    <button type="button" class="btn btn-warning">Voltar</button>
                </a>
            </div>
        </div>
    </form>
</x-layout>
