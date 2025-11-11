<?php

include_once '../DAO/DfacturaDAO.php';

class CtrlDfactura extends DfacturaDAO{

    public function read() {
        include_once '../View/Dfactura/ModalsDfactura.php';
        include_once '../View/Dfactura/ViewDfactura.php';
        
        ViewDfactura::getRead();
    }
     public function data(){
        $listDfactura=[];
        $array=[];
        $listDfactura=DfacturaDAO::getAll(); //donde sale la extraccion.
        foreach($listDfactura as $key => $rowDfactura){          
           
            $array['data'][$key]['dfact_id'] = $rowDfactura['dfact_id']; 
            $array['data'][$key]['fact_id'] = $rowDfactura['fact_id'];               
            $array['data'][$key]['pro_id'] = $rowDfactura['pro_id'];       
            $array['data'][$key]['pro_precio'] = $rowDfactura['pro_precio'];
            $array['data'][$key]['drres_cantidad'] = $rowDfactura['drres_cantidad'];
            $array['data'][$key]['drres_subtotal'] = $rowDfactura['drres_subtotal'];
            $array['data'][$key]['buttons']  = '<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDfactura" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-edit fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDfactura">
                        <li><a class="dropdown-item btnShowEdit" href="#!" data-bs-toggle="modal" data-bs-target="#modalEditDfactura" data-url="'.getUrl('Dfactura', 'Dfactura', 'getData', array('id' => $rowDfactura['dfact_id']), 'ajax').'" role="button">Editar</a></li>
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