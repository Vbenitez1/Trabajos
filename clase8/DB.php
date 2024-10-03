<?php
$mysqli = new mysqli("localhost", "usuario", "password", "basedatos", "puerto_sin_comillas");
if($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}
echo $mysqli->host_info ."\n";
?>