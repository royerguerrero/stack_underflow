<?php $categorias = categoriaController::getAllCategories(); ?>

<section class="container p-3">
    <div class="categorias">
        <?php foreach($categorias as $categoria): ?>
        <button class="btn btn-secondary"><?= $categoria->nombre ?></button>
        <?php endforeach; ?>
    </div>
</section>