<?php
$meses = array("enero","Febrero","Marzo","Abril",
               "Mayo","Junio","Julio","Agosto",
               "Septiembre","Octubre","Noviembre","Diciembre");

    $fecha =date("Y-m-d");
    $dia =date("d");
    $mes =date("m") ;
    $año =date("Y");


    print ("Hoy es: ".$dia. " de ".$mes. " de ".$año);