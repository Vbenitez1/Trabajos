<?php
if(isset($_POST)){

    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $nickname = $_POST['nickname'];
    $genero = $_POST['genero_id'];

}
?>
<?php
include "conexion.php";
$sql_insertar = "insert into cancion values(default,'$nombre','$autor','$nickname', $genero);";

$conexion->query($sql_insertar);

header("Location: cancion.php");
exit;
?>