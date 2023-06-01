<?php
class Personas {
    public $nombre;
    public $apellido;
    public $edad;

    function __construct($nombre, $apellido, 
    $edad){
        $this->nombre = $nombre;
        $this->apellido = $nombre;
        $this->edad = $edad;
    }
    function getNombre() {
        return $this->nombre;  
    }

    function getApellido() {
        return $this->apellido;  
    }

    function getEdad() {
        return $this->edad;  
    }

    function getFechaNacimiento(){}
}

$persona = new Personas("manuel", "codesal", 19);
echo $persona->getNombre();

?>