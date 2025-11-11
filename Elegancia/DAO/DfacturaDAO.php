<?php

include_once '../lib/Config/conexionSqli.php';

class DfacturaDAO extends Connection {
    //put your code here
     private static $instance = NULL;
    public static function getInstance(){
        if(self::$instance == NULL)
            self::$instance = new DfacturaDAO();
        return self::$instance;
    }
     public function getALL(){
        $sql = "SELECT dfact_id, fact_id, pro_id, pro_precio, drres_cantidad, drres_subtotal, FROM detalle_factura";
        $result = $this->execute($sql);
       
        return $result;
    }
}