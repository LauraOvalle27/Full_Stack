<?php 

    /*Archivo conexión base de datos */

    $serve = "localhost";
    $user = "root";
    $password = "";
    $database = "ltweb";

    $conexion = new mysqli( $serve, $user, $password, $database);
    if($conexion -> connect_errno){
        echo "error";
        exit();
    }else{
        echo "you are the best";
}

 
