<?php
$personas = array("Ana","Lucero","Luz","Sofia","Belen");
$premios = array("Bicicleta","Pileta","Patineta");
$cantidad = count($personas)-1;

foreach($premios as $p){
    while(1){
        $sorteo = rand(0,$cantidad);
        if($personas[$sorteo] != "0"){
            $premiados[$p] = $personas[$sorteo];
            $personas[$sorteo]=     "0";
            break;
        }
    }
}

foreach($premiados as $item=> $p){
    print(" Premio: ".$item." Ganador: ".$p);
    echo"<br>";
}

echo "<br>";
foreach($personas as $p){
    print (" - ".$p);
}