<?php
class Fabrica {
    public $codigo;
    public $descripcion;
    public $costo_prima;
    public $tiempo;

    function __construct($codigo, $descripcion, $costo_prima, $tiempo){
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->costo_prima = $costo_prima;
        $this->tiempo = $tiempo;
    }

    
    function getCostoProd(){
        return ($this->tiempo * 850) + $this->costo_prima + ($this->tiempo * 850) * 35 / 100;
    }
    //costo producción por 1hs = 850.00$
    //costo produccion + 35%
    
}
$fabrica = new Fabrica("1", "Mesa", 10000, 5);
echo $fabrica->getCostoProd();

class DepVenta extends Fabrica {
    function __construct (){

    }

}


?>