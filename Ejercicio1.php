<?php
class Animal{
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setEdad($edad){
        $this->edad=$nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function toString(){
        return "Soy un animal".$this->nombre;
    }
}

class Perro extends Animal{

    public function __construct($nombre, $edad){
        parent::__construct($nombre, $edad);
    }

    public function getEdad(){
        return parent::getEdad() * 7 ;
    }

    public function toString(){
        return "Soy un perro ".parent::getNombre();
    }
}

$miperrito= new Perro("Puppy", 4);

print($miperrito->getNombre());
echo"<br>";
print($miperrito->getEdad());
echo"<br>";
print($miperrito->toString());

echo"<br>";
echo"<br>";

$miperrito= new Perro("Carlos", 11);

print($miperrito->getNombre());
echo"<br>";
print($miperrito->getEdad());
echo"<br>";
print($miperrito->toString());


