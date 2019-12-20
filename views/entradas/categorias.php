<?php $categorias = categoriaController::getAllCategories(); ?>

<section class="container p-3">
    <div class="categorias">
        <h1 class="oswald h2 text-uppercase text-center">Categorias</h1>
        <?php foreach($categorias as $categoria): ?>
        <a href="<?= $categoria->id ?>"><button class="btn btn-secondary"><?= $categoria->nombre ?></button></a>
        <?php endforeach; ?>
    </div>
</section>