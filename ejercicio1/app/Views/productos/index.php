<?php echo $this->extend('plantilla/layout'); ?>

<?php echo $this->section('contenido'); ?>

<!-- Contenido -->
<main class="page">
    <div class="container">
        <h1>Productos</h1>
        <table class="table table-striped table-responsive">
            <thead>
                <th>Código</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Almacen</th>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) : ?>
                <tr>
                    <td><?php echo $producto['codigo']; ?></td>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><?php echo $producto['stock']; ?></td>
                    <td><?php echo $producto['almacen']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</main>


<?php echo $this->endSection('contenido'); ?>