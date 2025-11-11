<?php

class ModalsUsuario {

    public static function modalCreate() {
        ?>
        <div class="modal" tabindex="-1"  id="modalCreateUsuario">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registro Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form name="frmCreateVeterinario" action="<?php echo getUrl('Usuario', 'Usuario', 'postNew'); ?>" method="post">
                            <div class="mb-3">
                                <label for="codigo" class="from-label">codigo</label><br>
                                <input type="number" name="idUsuario" id="idUsuario" class="form-control" require><br>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="from-label">identificacion</label><br>
                                <input type="text" name="identificacionUsuario" id="identificacionUsuario" class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="from-label">login</label><br>
                                <input type="text" name="loginUsuario" id="loginUsuario" class="form-control" require>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="from-label">contraseña</label><br>
                                <input type="text" name="contraseñaUsuario" id="contraseñaUsuario" class="form-control" require>
                            </div>    
                            <div class="mb-3">
                                <label for="nombre" class="from-label">nombre</label><br>
                                <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" require>
                            </div> 
                            <div class="mb-3">
                                <label for="nombre" class="from-label">apellido</label><br>
                                <input type="text" name="apellidoUsuario" id="apellidoUsuario" class="form-control" require>
                            </div>  
                            <div class="mb-3">
                                <label for="nombre" class="from-label">email</label><br>
                                <input type="text" name="emailUsuario" id="emailUsuario" class="form-control" require>
                            </div>  
                            <div class="mb-3">
                                <label for="nombre" class="from-label">direccion</label><br>
                                <input type="text" name="direccionUsuario" id="direccionUsuario" class="form-control" require>
                            </div>  
                            <div class="mb-3">
                                <label for="nombre" class="from-label">telefono</label><br>
                                <input type="text" name="telefonoUsuario" id="telefonoUsuario" class="form-control" require>
                            </div>  
                            <div class="mb-3">
                                <label for="nombre" class="from-label">estado</label><br>
                                <input type="text" name="estadoUsuario" id="estadoUsuario" class="form-control" require>
                            </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
}
