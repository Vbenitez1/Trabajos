<?php
include "conexion.php";

$sql = "select nombre,autor, genero_id from cancion where nickname like 'jose'";

$resultado = $conexion->query($sql);
?>
<div class="col-sm-4">
    <h4>Agrega la cancion</h4>
    <form method= "post" action="controladorcancion.php">
        <input type="text" name= "nombre" placeholder="Nombre" class= "form-control">
        <input type="text" name= "autor" placeholder="Autor" class= "form-control">
        <input type="hidden" name= "nickname" value="jose">
        <select name="genero_id">
            <option value="1">POP </option>
            <option value="2">Rock </option>
        </select>
        <input type= "submit" value = "Agregar cancion" class= "btn btn-outline-dark">
</form>
</div>
<h3>Lista de canciones</h3>
<table class="table table-striped">
    <?php
    if($resultado->num_rows > 0){
        while($fila = $resultado->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$fila["nombre"]."</td>";
            echo "<td>".$fila["autor"]."</td>";
            echo "<td>".$fila["genero_id"]."</td>";
        }
    }else{
        echo "No tienes cancion aun:(";
    }
    ?>
    </table>