<x-layout title="Cadastro">

    <body>
    <main>
        <div class="container">
            <div class="col-10 offset-1 bg-all">
                <div class="col-4 div-left">
                    <div class="div-img-left">
                        <img src="{{asset('img/logo_teste.png')}}" alt="Logo-ArdPets">
                    </div>
                    <div class="titulo">
                        <h1>Cadastro</h1>
                        <hr>
                    </div>
                    <form method="post" action="criar-conta/criado">
                        @csrf
                        <div class="single-input">
                            <input type="text" class="input" id="nome" name="CreateUserName" maxlength="25" required>
                            <label for="Nome">Nome</label>
                        </div>
                        <div class="single-input">
                            <input type="number" class="input" id="nome" name="CreateUserCPF" maxlength="14" required>
                            <label for="cpf-cnph">CPF/CNPJ</label>
                        </div>
                        <div class="single-input">
                            <input type="password" class="input" id="senha" name="CreateUserPasswd" maxlength="10"
                                   required>
                            <label for="Senha">Senha</label>
                        </div>
                        <div class="botao col-12">

                            <div class="login-btn col-6">
                                <button type="submit" value="Enviar" name="enviarbtn"
                                        class="btn btn-outline-secondary px-3 loginbtn ">Criar
                                </button>
                            </div>
                            <div class="limpar-btn col-6">
                                <button type="reset" value="limpar"
                                        class="btn btn-outline-secondary px-3 limparbtn ">Limpar
                                </button>
                            </div>

                        </div>
                    </form>
                    <div class="redes-sociais col-12">
                        <a href="#" target="_blank"><img src="{{asset('img/facebook.png')}}" alt="Facebook"></a>
                        <a href="#" target="_blank"><img src="{{asset('img/google.png')}}" alt="Gmail"></a>
                        <a href="#" target="_blank"><img src="{{asset('img/instagram.png')}}" alt="Instagram"></a>
                    </div>
                </div>
                <div class="col-8 div-right p-0">
                    <div class="col-12 topo p-0">
                        <div class="wiki pt-4"><a href="">
                                <p class="opcoes">WikiPets</p>
                            </a></div>
                        <div class="snCad pt-4"><a href="">
                                <p class="opcoes">Sobre Nós</p>
                            </a></div>
                        <div class="pt-3">
                            <a href="/iniciar-sessao"><img src="{{asset('img/voltar.png')}}" class="btn-voltar pt-1"
                                                           alt="Voltar"></a>
                        </div>
                    </div>
                    <div class="col-8 offset-2 nameAP">
                        <p>ArdPet</p>
                    </div>
                    <div class="col-8 hr-name">
                        <hr>
                    </div>

                    <div class="col-9 offset-2 textin">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi quaerat
                            deserunt optio odio labore dignissimos impedit aut itaque laboru quae
                            llum deleniti nobis incidunt tenetur eaque officiis vitae sequi magni.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quos nemo
                            doloremque aliquid, laudantium accusamus soluta! Optio ullam consequntur ...</p>
                    </div>
                    <div class="col-4 offset-2">
                        <a href="">
                            <button class="btn btn-outline-secondary px-3 lermaisbtn ">Leia Mais</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </body>

    </html>
</x-layout>
