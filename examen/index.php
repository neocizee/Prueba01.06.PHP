<?php
class Fabrica {
    public $codigo = 1;
    public $descripcion = "mesa";
    public $costo_prima = 10000;
    public $tiempo = 5;

    public function __construct($codigo, $descripcion, $costo_prima, $tiempo){
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->costo_prima = $costo_prima;
        $this->tiempo = $tiempo;
    }

    
    public function getCostoProd(){
        return ($this->tiempo * 850) + ($this->tiempo * 850) * 35 / 100;
    }
    //costo producción por 1hs = 850.00$
    //costo produccion + 35%
    
}

class DepVenta extends Fabrica {
    function __construct (){
        $this->getCostoProd();
        parent::getCostoProd();

    }

    function getCostoTotal(){
        $this->getCostoProd();
    }

    
}

$depventa = new depventa("1", "Mesa", 10000, 5);
echo $depventa->getCostoTotal();

?>