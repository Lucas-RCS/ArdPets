<x-homelayout title="Principal">
    <main>
        <section class="meio-1">
            <div class="cadastro-pet col-4">
                <div class="col-5">
                    <img src="{{ asset('img/logo_teste_escuro.png') }}" class="img-fluid rounded-circle" alt="Foto_Logo_ArdPet">
                </div>
                <hr>
                <div class="col-6 pet-cdt">
                    <div class="frase-cdt">
                        @foreach($Pets as $pet)
                        <h1>{{ $pet->nome }}</h1>
                        <p>{{ $pet->porte }}</p>
                        <p>{{ $pet->porte }}</p>
                        @endforeach
                    </div>
                    <!-- Botão para acionar modal -->
                    <button type="button" class="btn btn-primary cadastrobtn" data-toggle="modal"
                            data-target="#ExemploModalCentralizado">
                        Cadastrar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
                         aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">Cadastro Pet</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form method="post" action="/pet/store">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nome do Pet</label>
                                            <input type="text" name="CreatePetName" class="form-control " id="exampleFormControlInput1" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Porte do Animal</label>
                                            <select  name="CreatePetPorte" class="form-control" id="exampleFormControlSelect1">
                                                <option value="null">Nenhum</option>
                                                <option value="mini">Mini</option>
                                                <option value="pequeno">Pequeno</option>
                                                <option value="medio">Médio</option>
                                                <option value="grande">Grande</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Idade do Pet</label>
                                            <input type="number" name="CreatePetIdade" class="form-control " id="exampleFormControlInput1" placeholder="Idade">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Insira a foto de seu Pet</label>
                                            <input type="file" name="CreatePetFoto" class="form-control-file ml-4" id="exampleFormControlFile1">
                                        </div>
                                        <div class="form-group" data-date-format="HH:mm">
                                            <label for="exampleFormControlFile1">Hora:</label>
                                            <input type="time" name="CreatePetTimer" >
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
        </section>

    </main>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }} "></script>

</x-homelayout>
<!-- Hello World!-->
