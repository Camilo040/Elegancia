<?php

class ViewUsuario {

    public static function getRead() {
        ?>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Usuario</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Listar</li>
            </ol>
            <div class="row">

                <div class ="lg-6 md-2 xs-12">

                    <div class="col-md-1">
                        <div class="card shadow-sm border-success">
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCreateUsuario">CREAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table id="dt_usuario" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>IDENTIFICACION</th>
                                <th>PASS</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th> 
                                <th>EMAIL</th>                                                                            
                                <th>TELEFONO</th>
                                <th>BOTONES</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php
        ModalsUsuario::modalCreate();
    }
}
?> 
<script type="text/javascript" src="../View/Usuario/Usuario.js"></script>