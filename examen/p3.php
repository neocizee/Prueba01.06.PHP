<?php
require_once('p2.php');
    $depventa = new depventa();
    echo "Costo produccion = " . $depventa->getCostoProd() . "\n";
    echo "Costo individual total = " . $depventa->getTotal() . "\n";
    echo "Costo total = " . $depventa->getCostoTotal() . "\n";
?>