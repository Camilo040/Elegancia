<?php

class ViewDfactura {

    public static function getRead() {
        ?>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detalles de factura</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Listar</li>
            </ol>
            <div class="row">

                <div class ="lg-6 md-2 xs-12">

                    <div class="col-md-1">
                        <div class="card shadow-sm border-success">
                            <div class="card-body text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table id="dt_dfactura" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ID FACTURA</th>
                                <th>ID PRODUCTO</th>
                                <th>PRECIO PRODUCTO</th>
                                <th>CANTIDAD</th> 
                                <th>SUBTOTAL</th>                                                                            
                                <th>BOTONES</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php
        ModalsDfactura::modalCreate();
    }
}
?> 
<script type="text/javascript" src="../View/Dfactura/dfactura.js"></script>