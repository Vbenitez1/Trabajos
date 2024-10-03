<?php
    include 'vars.php';
    //include '';

    $conexion = new mysqli($host,$user,$password,$database,$port);

    if($conexion->connect_errno){
        echo "No se pudo conectar ".$conexion->connect_error;
    }
    //echo "Conexion OK".$conexion->host_info;
    ?>