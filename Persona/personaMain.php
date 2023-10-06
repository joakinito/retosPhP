<?php
/**
 * @author joaki 
 */
require_once 'persona.php';
require_once 'tecnico.php';
require_once 'informatico.php';

$tecnicoRedes1 = new TecnicoRedes("Joaquin", "Maquinon", 170, 22, "php", "muchisima", true, true);

$tecnicoRedes2 = new TecnicoRedes("Joaquin", "Maquinon", 170, 22, "php", "muchisima", false, true);

$picateclas = new Informatico("paco", "comer", 150, 19, "HMTL", null);

    echo $tecnicoRedes1->programar();

    echo $tecnicoRedes1->caminar(10);

    echo $tecnicoRedes1->hablar("hola");
    
    echo $picateclas->caminar(20);
    
    echo $tecnicoRedes1 ->auditarRedes();

    echo $tecnicoRedes2 ->auditarRedes();