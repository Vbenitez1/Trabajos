<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['operacion'];
$r = "No se ha realizado la operacion";

if($op == "s"){
    $r= sumar($n1,$n2);
}else if($op == "r"){
    $r= restar($n1,$n2);
} 

header("Location: Funcion.php?m=".$r);
exit;
function sumar($n1,$n2){
    return $n1 + $n2;
}

function restar($n1,$n2){
    return $n1 - $n2;
}
