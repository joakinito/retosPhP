<?php
/**
 * @author joaki 
 */
require_once 'configuracion.php';

//Configuracion::setColor('azulito');

//Configuracion::setNewsletter("yes");

//Configuracion::setEntorno('informatica');


$color = Configuracion::getColor();

$newsletter = Configuracion::getNewsletter();

$entorno = Configuracion::getEntorno();


echo "Color: " . $color . "<br>";

echo "Newsletter: " . ($newsletter."<br>" );

echo "Entorno: " . $entorno . "<br>";