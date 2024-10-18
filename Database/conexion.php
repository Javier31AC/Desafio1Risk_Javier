<?php

class Conexion{

    public static function conectar(){
        try {
           $conexion = new mysqli(ConstantesBD::$localhost, ConstantesBD::$usuario, ConstantesBD::$pass, ConstantesBD::$bbdd);
   
          
            return $conexion;
        }
        catch (Exception $e){
            return -1;
        }
        
    }
}