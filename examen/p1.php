<?php
    class Fabrica {
        public $codigo = 1;
        public $descripcion = "mesa";
        public $costoprima = 10000;
        public $tiempo = 5;
        
        public function getCostoProd(){
            return ($this->tiempo * 850) + ($this->tiempo * 850) * 35 / 100;
        }
        public function getTotal(){
            return (($this->tiempo * 850) + ($this->tiempo * 850) * 35 / 100) + $this->costoprima;
        }
        
        //costo producción por 1hs = 850.00$
        //costo produccion + 35%
        
    }
?>