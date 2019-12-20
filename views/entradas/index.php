<section class="container">
    <div>
        <h1 class="oswald h2 text-uppercase text-center text-warning">Entradas</h1>
        <?php  echo $entradas = entradaController::getAllEntraces();?>
        <div class="row">
            <?php foreach($entradas as $entrada): ?>
            <div class="col-sm-12 col-md-4">
                <div class="card border-light mb-3" style="max-width: 20rem;">
                    <div class="card-header">Autor</div>
                    <div class="card-body">
                        <h4 class="card-title">Titulo</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                    <div class="card-footer">Categoria | Fecha | Estado</div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>