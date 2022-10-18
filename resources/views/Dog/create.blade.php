<x-layout title="Registrar">
    <form class="row g-3" action="" method="POST">
        <div class="col-md-6">
            <label class="form-label">Nome</label>
            <input class="form-control" type="text" name="nome" id="nome">
        </div>
        <div class="col-12">
            <label class="form-label">Raça(s)</label>
            <div class="input-group">
                <input class="form-control" placeholder="Raça" type="text" name="raca1" id="raca1">
                <input class="form-control" placeholder="Raça" type="text" name="raca2" id="raca2">
            </div>
        </div>
        <div class="col-auto">
            <label class="form-label">Altura</label>
            <input type="number" class="form-control" id="autoSizingInput" name="altura">
        </div>
        <div class="col-auto">
            <label class="form-label">Peso</label>
            <input type="number" class="form-control" id="autoSizingInput" name="peso">
        </div>
        <div class="form-check-label"></div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>

</x-layout>
