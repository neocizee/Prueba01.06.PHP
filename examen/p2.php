<?php
include('p1.php');


class DepVenta extends Fabrica {
    public $items = 2;

    
    public function getCostoTotal(){
        return $this->getTotal() * $this->items;
    }

}


?>