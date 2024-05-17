<?php echo $this->extend('plantilla/layout'); ?>

<?php echo $this->section('contenido'); ?>

<!-- Contenido -->
<main class="page">
    <div class="container">
        <br>
        <br>
        <h1>Detalle de Productos <?php echo $producto['nombre']; ?> </h1>
    </div>
</main>


<?php echo $this->endSection('contenido'); ?>