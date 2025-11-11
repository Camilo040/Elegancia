<?php
session_start();
include_once '../lib/helpers.php';
include_once '../View/plantillas/header.php';
include_once '../View/plantillas/navbar.php';


if (isset($_GET['module'])) {
    resolve();
} else {
    ?>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Bienvenido a El Granero la Elegancia</h1>
        <p class="text-center">Aquí podrás gestionar todo lo que necesites</p>

        <div class="row mt-5">
            <!-- Órdenes -->
            <div class="col-md-6">
                <div class="card shadow-sm border-primary">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Generar Factura</h5>
                        <p class="card-text">Crea, edita y consulta las órdenes registradas.</p>
                        <a href="<?= getUrl("Factura", "Factura", "read");?>" class="btn btn-primary">Generar Facturas</a>
                    </div>
                </div>
            </div>


            <!-- Reportes -->
            <div class="col-md-6">
                <div class="card shadow-sm border-warning">
                    <div class="card-body text-center">
                        <h5 class="card-title text-warning">Ver Reportes</h5>
                        <p class="card-text">Consulta el estado de las facturas.</p>
                        <a href="<?= getUrl("DFactura", "DFactura", "read");?>" class="btn btn-warning">Ver Reportes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}
include '../View/plantillas/footer.php';
?>
