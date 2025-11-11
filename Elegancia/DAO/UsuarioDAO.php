<?php

include_once '../lib/Config/conexionSqli.php';

class UsuarioDAO extends Connection {
    //put your code here
     private static $instance = NULL;
    public static function getInstance(){
        if(self::$instance == NULL)
            self::$instance = new UsuarioDAO();
        return self::$instance;
    }
     public function getALL(){
        $sql = "SELECT usu_id, usu_identificacion, usu_pass, usu_nombre, usu_apellido, usu_email, usu_tel FROM usuario";
        $result = $this->execute($sql);
       
        return $result;
    }
}