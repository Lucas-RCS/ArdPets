<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/paginicialcss.css')}}">
    <title>Pag Inicial</title>
</head>

<body>

    @isset($MensagemSucesso)
    <div class="alert alert-success">
        {{ $MensagemSucesso }}
    </div>
    @endisset

    <section class="bg-cao">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="{{ asset('img/LOGO_ARD-PETS-branca.png')}}" alt="ArdPet">ArdPets</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active ">
                                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WikiPets</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Cães</a>
                                    <a class="dropdown-item" href="#">Gatos</a>
                                    <div class="dropdown-divider">
                                    </div>
                                    <a class="dropdown-item" href="#">Rações</a>
                                    <a class="dropdown-item" href="#">Guia</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link sn-nav" href="#sobrenos">Sobre Nós</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#contato">Contato</a>
                            </li>

                        </ul>

                        <button class="btn btn-outline-primary my-2 my-sm-0 btn-sair" data-toggle="modal" data-target="#ExemploModalCentralizado2" type="submit"><img src="{{ asset('img/perfil.png') }}" alt="Perfil"></button>

                        <div class="modal fade" id="ExemploModalCentralizado2" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Atualizar Perfil</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body ">
                                        <form method="post" action="/user/update">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Email</label>
                                                <input type="email" name="UpdateUserEmail" class="form-control " id="exampleFormControlInput1" placeholder="Novo Nome">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Senha</label>
                                                <input type="password" name="UpdateUserPasswd" class="form-control " id="exampleFormControlInput1" placeholder="Nova Senha">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button type="submit" class="btn btn-success ">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="/logout">
                            @csrf
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0 btn-sair2"><img src="{{asset('img/opcao-de-sair.png')}}" alt="Sair"></button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>


        <section class="meio-1">
            <div class="cadastro-pet col-4">
                <div class="col-5">
                    <img src="{{asset('img/LOGO_ARD-PETS.png')}}" class="" alt="Foto_Logo_ArdPet">
                </div>
                <hr>
                <div class="col-6 pet-cdt">
                    <div class="frase-cdt">
                        @foreach($Pets as $pet)
                        <h1>{{ $pet->nome }}</h1>
                        <p>{{ $pet->porte }}</p>
                        <p>{{ $pet->idade }}</p>
                        @endforeach
                    </div>

                    <!-- Botão para acionar modal -->
                    <button type="button" class="btn btn-primary cadastrobtn" data-toggle="modal" data-target="#ExemploModalCentralizado">
                        Cadastrar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">Cadastro Pet</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="/pet/store" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nome do Pet</label>
                                            <input type="text" class="form-control " id="exampleFormControlInput1" placeholder="Nome" name="CreatePetName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Porte do Animal</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="CreatePetPorte">
                                                <option selected value="nenhum">Nenhum</option>
                                                <option value="mini">Mini</option>
                                                <option value="pequeno">Pequeno</option>
                                                <option value="medio">Médio</option>
                                                <option value="grande">Grande</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Idade do Pet</label>
                                            <input type="number" class="form-control " id="exampleFormControlInput1" placeholder="Idade" name="CreatePetAge">
                                        </div>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label for="exampleFormControlSelect1">Hora:</label>
                                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Horas" name="CreatePetName" min="00" max="23">
                                                    </select>
                                                </div>

                                                <div class="form-group col-6">
                                                    <label for="exampleFormControlSelect1">Minutos:</label>
                                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Minutos" name="CreatePetName" min="00" max="59">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-success ">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </section>
    <section class="meio-2">
    </section>
    <!-- Sobre Nos -->
    <section class="sobrenos mt-2 " id="sobrenos">
        <div class="text-center txt-sn pt-2">
            <h1>Conheça a equipe</h1>
        </div>
        <div class="sn">
            <div class="mt-4 ml-5 p-3 text-center">
                <div class="card pessoa" style="width: 15rem;">
                    <img class="card-img-top" src="{{asset('img/cezar.jpg')}}" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Cezar Aparecido</h5>
                        <p class="card-text">Desenvolvimento do Protótipo em Arduino</p>
                        <hr>
                        <a href="#" class="img-sn"><img src="{{asset('img/facebook_verde.png')}}" alt="Facebook"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/instagram_verde.png')}}" alt="instagram"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/twitter_verde.png')}}" alt="Twitter"></a>
                    </div>
                </div>
            </div>
            <div class="mt-4 ml-3 p-3 text-center">
                <div class="card pessoa" style="width: 15rem;">
                    <img class="card-img-top" src="{{asset('img/Joao.jpg')}}" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">João Roberto</h5>
                        <p class="card-text">Desenvolvimento Back-End e Documentação</p>
                        <hr>
                        <a href="#" class="img-sn"><img src="{{asset('img/facebook_verde.png')}}" alt="Facebook"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/instagram_verde.png')}}" alt="instagram"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/twitter_verde.png')}}" alt="Twitter"></a>
                    </div>
                </div>
            </div>
            <div class="mt-4 ml-3 p-3 text-center">
                <div class="card pessoa" style="width: 15rem;">
                    <img class="card-img-top" src="{{asset('img/Loane.jpeg')}}" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Loane Mendes</h5>
                        <p class="card-text">Desenvolvimento Front-End e Gerente do projeto</p>
                        <hr>
                        <a href="#" class="img-sn"><img src="{{asset('img/facebook_verde.png')}}" alt="Facebook"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/instagram_verde.png')}}" alt="instagram"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/twitter_verde.png')}}" alt="Twitter"></a>
                    </div>
                </div>
            </div>
            <div class="mt-4 ml-3 p-3 text-center">
                <div class="card pessoa" style="width: 15rem;">
                    <img class="card-img-top" src="{{asset('img/LucasA.jpg')}}" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Lucas Adolfo</h5>
                        <p class="card-text">Desenvolvimento do Protótipo em Arduino</p>
                        <hr>
                        <a href="#" class="img-sn"><img src="{{asset('img/facebook_verde.png')}}" alt="Facebook"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/instagram_verde.png')}}" alt="instagram"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/twitter_verde.png')}}" alt="Twitter"></a>
                    </div>
                </div>
            </div>
            <div class="mt-4 ml-3 p-3 text-center">
                <div class="card pessoa" style="width: 15rem;">
                    <img class="card-img-top" src="{{asset('img/LucasR.jpg')}}" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">Lucas Ribeiro</h5>
                        <p class="card-text">Desenvolvimento Front-End e Documentação</p>
                        <hr>
                        <a href="#" class="img-sn"><img src="{{asset('img/facebook_verde.png')}}" alt="Facebook"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/instagram_verde.png')}}" alt="instagram"></a>
                        <a href="#" class="img-sn"><img src="{{asset('img/twitter_verde.png')}}" alt="Twitter"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section class="contato" id="contato">
        <div class="col-12 text-center text-ctt pt-2">
            <h1>Contate-nos</h1>
            <p>Alguma dúvida ou observação? Basta nos escrever uma mensagem</p>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-12 ctt ">
                    <div class="col-7 ctt-left">
                        <img src="{{asset('img/dogs_ctt.jpg')}}" alt="">
                    </div>
                    <div class="col-4 ctt-right text-left">
                        <h1>Entrar em contato</h1>
                        <p>Tem algum inquérito ou algum feedback para <br>
                            nós? Preencha o formulário abaixo para <br>
                            entrar em contato com nossa equipe
                        </p>
                        <form action="">
                            <div class="mb-3 ">
                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                <input type="text" class="form-control ctt-form" id="exampleFormControlInput1" placeholder="Nome Completo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email </label>
                                <input type="email" class="form-control ctt-form" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Com o que podemos ajudar?</label>
                                <textarea class="form-control ctt-form" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary ctt-btn">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

    <!-- Hello World!-->
    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center rodape ">
        <div class="container">
            <div class="row">
                <div class="col-12 footer">
                    <div class="logo_footer col-3 pb-3">
                        <h3 class="pt-3 text-left">ArdPets</h3>
                        <hr>
                        <img src="{{asset('img/LOGO_ARD-PETS-branca.png')}}" alt="Logo_ArdPets">
                    </div>
                    <div class=" col-6">
                        <h3 class="pt-3 text-right">Sobre o Projeto</h3>
                        <hr>
                        <p class="text-right pt-4">
                            O ArdPets é um projeto realizado por alunos do curso de <br>
                            Análise e Desenvolvimento de sistemas, da Fatec Cruzeiro Profº Waldomiro May, onde utilizamos de
                            variados recursos para a construção de um sistema web, voltado á
                            alimentação dos pets, juntamente com um projeto em Arduino
                        </p>
                    </div>
                    <div class=" col-3">
                        <h3 class="pt-3 text-right"> Redes Sociais</h3>
                        <hr>
                        <div class="div-rs mt-4">
                            <a href="#" class="mr-3"><img src="{{asset('img/facebook.png')}}" alt="facebook"></a>
                            <a href="#"><img src="{{asset('img/twitter.png')}}" alt="twitter"></a>
                        </div>
                        <div class="div-rs mt-3">
                            <a href="#" class="mr-3"><img src="{{asset('img/instagram.png')}}" alt="instagram"></a>
                            <a href="#"><img src="{{asset('img/google.png')}}" alt="google"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-footer">
        <div class="container">
            <div class="row">
                <div class="footer-end">
                    <p class="copyr">©2022 Copyright - ArdPets</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>