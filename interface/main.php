<?php
require_once 'imac.php';

$hola = new iMac("plus","air");

echo $hola->version(20);

echo $hola->iniciar();

echo $hola->apagar();