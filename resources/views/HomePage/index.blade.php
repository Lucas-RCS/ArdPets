<x-homelayout title="Principal">
    <main>
        <section class="meio-1">
            <div class="cadastro-pet col-4">
                <div class="col-5">
                    <img src="{{ asset('img/logo_teste_verde.png') }}" class="img-fluid rounded-circle" alt="Foto_Logo_ArdPet">
                </div>
                <hr>
                <div class="col-6 pet-cdt">
                    <div class="frase-cdt">
                        <h1>Cadastre seu Pet</h1>
                        <p>Nós iremos facilitar a sua vida e a do seu Pet.</p>
                    </div>
                    <button class="btn btn-outline-secondary cadastrobtn ">Cadastrar</button>
                </div>
            </div>
        </section>

    </main>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }} "></script>
    </body>
</x-homelayout>
<!-- Hello World!-->
