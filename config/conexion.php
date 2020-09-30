<?php

//clase para conectar bdd
class Conectar {
    //funcion de la conexión
    public static function conexion(){
        //query que conecta la base de datos con el sistema 
        //ingresar a localhost con usuario root...
        $conexion = new mysqli("localhost","root","","Matricula");
         return $conexion;
    }
}

?>