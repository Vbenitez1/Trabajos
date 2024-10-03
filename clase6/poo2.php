<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<?php
class Persona{
    public $nombre;
    public $telefono;

    public function __construct($nomb,$tel){
        $this->nombre =$nomb;
        $this->telefono =$tel;
    }

    public function obtener_datos(){
        return "Nombre: ".$this->nombre."Telefono: ".$this->telefono;
    }

    
}

class Alumno extends Persona{
    public $grado;
    public $turno;

    public function __construct($nomb,$tel,$grado,$turno){
        parent::__construct($nomb,$tel);
        $this->grado=$grado;
        $this->turno=$turno;
    }
    public function obtener_datos(){
        return parent::obtener_datos()."Grado: ".$this->grado."Turno: ".$this->turno;
    }
    public function getNombre(){
        return parent::nombre;
    }
}

?>
<h3>Crear un objeto array de la clase alumno</h3>
    <?php
    $alumnos = array();
    $alumnos[0] = new Alumno("Camila","1232465","Tercero - Nivel Medio","Tarde");
    $alumnos[1] = new Alumno("jose","1232465","Tercero - Nivel Medio","Tarde");
    $alumnos[2] = new Alumno("Fede","1232465","Tercero - Nivel Medio","Tarde");

    echo "<h3>Imprimir sus datos con foreach</h3>";
    echo "<table class='table'>";
    foreach ($alumnos as $alumno){
        echo "<tr>";
        echo "<td>$alumno->nombre </td>";
        echo "<td>$alumno->telefono </td>";
        echo "<td>$alumno->grado </td>";
        echo "<td>$alumno->turno </td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>