<?php

include_once '../DAO/UsuarioDAO.php';

class CtrlUsuario extends UsuarioDAO{

    public function read() {
        include_once '../View/Usuario/ModalsUsuario.php';
        include_once '../View/Usuario/ViewUsuario.php';
        
        ViewUsuario::getRead();
    }
     public function data(){
        $listUsuario=[];
        $array=[];
        $listUsuario=UsuarioDAO::getAll(); //donde sale la extraccion.
        foreach($listUsuario as $key => $rowUsuario){          
           
            $array['data'][$key]['id'] = $rowUsuario['usu_id']; 
            $array['data'][$key]['identificacion'] = $rowUsuario['usu_identificacion'];               
            $array['data'][$key]['pass'] = $rowUsuario['usu_pass'];       
            $array['data'][$key]['nombre'] = $rowUsuario['usu_nombre'];
            $array['data'][$key]['apellido'] = $rowUsuario['usu_apellido'];
            $array['data'][$key]['email'] = $rowUsuario['usu_email'];
            $array['data'][$key]['telefono'] = $rowUsuario['usu_tel'];
            $array['data'][$key]['buttons']  = '<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarUsuario" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-edit fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarUsuario">
                        <li><a class="dropdown-item btnShowEdit" href="#!" data-bs-toggle="modal" data-bs-target="#modalEditUsuario" data-url="'.getUrl('Usuario', 'Usuario', 'getData', array('id' => $rowUsuario['usu_id']), 'ajax').'" role="button">Editar</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Eliminar</a></li>                                              
                    </ul>
                </li>
            </ul>';                  
        };
       
        /*
            json_encode($array) => se convierte el arreglo a formato JSON para la libreria data table
        */
        echo json_encode($array);
    }
}