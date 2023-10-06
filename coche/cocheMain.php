<?php
/**
 * @author joaki 
 */
require_once 'coche.php';

$coche = new Coche("Amarillo", "Renault", "Clio", 150, 200, 5);

 $coche1 = new Coche("Verde", "Seat", "Panda", 250, 200, 5);

 $coche2 = new Coche("", false, false,false, false,false);
 
 
$coche->color = "ROSA";

echo $coche->mostrarInformacion();

echo $coche2->mostrarInformacion();

$COoche=1;
