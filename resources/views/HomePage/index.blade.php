<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/paginicialcss.css')}}">
    <link rel="shortcut icon" href="{{asset('img/LOGO_ARD-PETS-branca.png')}}" type="image/gif">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0" />

    <link rel="stylesheet" href="{{('lightbox2/dist/css/lightbox.min.css')}}" />
    <link rel="stylesheet" href="{{('css/style.css')}}" />

    <title>Página Inicial</title>
</head>

<body>

    @isset($MensagemSucesso)
    <div class="alert alert-success">
        {{ $MensagemSucesso }}
    </div>
    @endisset

    <section class="bg-cao">
        <header>
            <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
            </nav> -->
            <nav>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('img/LOGO_ARD-PETS-branca.png')}}" width="50" height="45" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    WikiPets
                                </a>
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Cães</a>
                                    <a class="dropdown-item" href="#">Gatos</a>
                                    <a class="dropdown-item" href="#">Rações</a>
                                    <a class="dropdown-item" href="#">Guia</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Sobre Nós</a></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <a href="#"><i class="fa fa-user-circle fa-2x btn-nav pt-1 mr-1 " alt="Voltar" data-toggle="modal" data-target="#ExemploModalCentralizado2" type="submit"></i></a>
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
                        </form>
                        <a href="#"><i class="fa fa-sign-out fa-2x btn-nav logout pt-1 " alt="Voltar"></i></a>
                    </div>
                </nav>
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

    <!-- meio-2 -->
    <section class="meio-2">
        <div class="banner-cat col-12">
            <div class="left-cat">
            </div>
            <div class="center-cat"></div>
            <div class="right-cat">
                <div class="logo-cat col-5">
                    <img src="{{asset('img/LOGO_ARD-PETS-branca.png')}}" alt="">
                </div>
                <div class="text-cat col-6">
                    <h1>ArdPets</h1>
                    <p>Alimentador Automatico de Pets</p>
                </div>
            </div>
        </div>
    </section>
    <!-- galeria -->
    <section class="galery">
        <div class="galeria">
            <h1>Galeria</h1>
        </div>
        <div class="grid-gallery">
            <div class="grid-item">
                <a href="{{asset('img/cao-img.jpg')}}" data-lightbox="gridImage">
                    <img src="{{asset('img/cao-img.jpg')}}" />
                </a>
            </div>
            <div class="grid-item">
                <a href="{{asset('img/catdog-logo.jpg')}}" data-lightbox="gridImage">
                    <img src="{{asset('img/catdog-logo.jpg')}}" />
                </a>
            </div>
            <div class="grid-item">
                <a href="{{asset('img/protot-img.jpeg')}}" data-lightbox="gridImage">
                    <img src="{{asset('img/protot-img.jpeg')}}" />
                </a>
            </div>
            <div class="grid-item">
                <a href="{{asset('img/cao-img2.jpg')}}" data-lightbox="gridImage">
                    <img src="{{asset('img/cao-img2.jpg')}}" />
                </a>
            </div>
            <div class="grid-item">
                <a href="{{asset('img/cat-img2.jpg')}}" data-lightbox="gridImage">
                    <img src="{{asset('img/cat-img2.jpg')}}" />
                </a>
            </div>
            <div class="grid-item">
                <a href="{{asset('img/cao-img3.jpg')}}" data-lightbox="gridImage">
                    <img src="{{asset('img/cao-img3.jpg')}}" />
                </a>
            </div>
            <div class="grid-item">
                <a href="{{asset('img/protot-img3.jpeg')}}" data-lightbox="gridImage">
                    <img src="{{asset('img/protot-img3.jpeg')}}" />
                </a>
            </div>
            <div class="grid-item">
                <a href="{{asset('img/protot-img2.jpeg')}}" data-lightbox="gridImage">
                    <img src="{{asset('img/protot-img2.jpeg')}}" />
                </a>
            </div>
            <div class="grid-item">
                <a href="{{asset('img/cao-img4.jpg')}}" data-lightbox="gridImage">
                    <img src="{{asset('img/cao-img4.jpg')}}" />
                </a>
            </div>
        </div>
    </section>
    <!-- Sobre Nos -->
    <section class="title-sn">
        <div class="title01 col-5"></div>
        <div class="title02 col-2">
            <h1>Sobre Nós</h1>
        </div>
        <div class="title03 col-5"></div>
    </section>
    <section class="sobre-nos col-12">
        <div class="LucasA col-6">
            <div class="card-container">
                <span class="pro">HDW</span>
                <img class="round" src="{{asset('img/LucasA.jpeg')}}" alt="user" />
                <h3>Lucas Adolfo</h3>
                <h6>Hardware</h6>
                <p>Arduino e Hardware</p>
                <div class="buttons">
                </div>
                <div class="skills">
                    <h6>Skills</h6>
                    <ul>
                        <li>HARDWARE</li>
                        <li>ARDUINO</li>
                        <li>INFRAESTRUTURA</li>
                        <div class="social">
                            <li><a href="#"><i class="fas fa-envelope fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="LucasR col-6 R">
            <div class="card-container">
                <span class="pro">DEV</span>
                <img class="round" src="{{asset('img/LucasR.jpg')}}" alt="user" />
                <h3>Lucas Ribeiro</h3>
                <h6>Programador</h6>
                <p>Front-end e Back-end Programador</p>
                <div class="buttons">
                </div>
                <div class="skills">
                    <h6>Skills</h6>
                    <ul>
                        <li>UI / UX</li>
                        <li>Front End Development</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <div class="social">
                            <li><a href="#"><i class="fas fa-envelope fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp fa-2x"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-square fa-2x"></i></a></li>
                        </div>
                    </ul>
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
                                <input type="email" class="form-control ctt-form" id="exampleFormControlInput1" placeholder="name@exemplo.com">
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

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center rodape ">
        <div class="container">
            <div class="row">
                <div class="col-12 footer">
                    <div class="logo_footer col-3 ">
                        <h3 class="pt-3 text-left">ArdPets</h3>
                        <hr>
                        <img src="{{asset('img/LOGO_ARD-PETS-branca.png')}}" alt="Logo_ArdPets">
                    </div>
                    <div class=" col-6">
                        <h3 class="mt-3 text-right">Sobre o Projeto</h3>
                        <hr>
                        <p class="text-right mt-3">
                            O ArdPets é um projeto realizado por alunos do curso de <br>
                            Análise e Desenvolvimento de sistemas, da Fatec Cruzeiro Profº Waldomiro May, onde utilizamos de
                            variados recursos para a construção de um sistema web, voltado á
                            alimentação dos pets, juntamente com um projeto em Arduino
                        </p>
                    </div>
                    <div class="col-3">
                        <h3 class="pt-3 text-right"> Redes Sociais</h3>
                        <hr>
                        <div class="div-rs mt-4">
                            <a href="#" class="mr-2"><i class="fab fa-facebook-square fa-2x"></i></a>
                            <a href="#" class="mr-2"><i class="fab fa-instagram fa-2x"></i></a>
                            <a href="#" class="mr-2"><i class="fab fa-twitter-square fa-2x"></i></a>
                            <a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a>
                        </div>
                        <div class="div-rs mt-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-footer">
        <div class="container">
            <div class="row">
                <div class="footer-end">
                    <p class="copyr">©2022 - 2023 Copyright - ArdPets</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/app.js"></script>
    <!-- jQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Lightbox JS -->
    <script src="../lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Custom js -->
    <script src="../js/main.js"></script>

</body>

</html>