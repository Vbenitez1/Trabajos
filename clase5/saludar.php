<?php
if(isset($_GET['nombre'])){
    $nombre = $_GET['nombre'];

    if(!empty($nombre)){
        print("hola $nombre");
    } else {
        print("Hola invitado");
    }
} else{
    echo "no existe ningun dato";
}