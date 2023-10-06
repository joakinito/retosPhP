<?php
/**
 * @author joaki 
 */
require_once 'persona.php';
class Informatico extends Persona
{
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador)
    {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->lenguajes = $lenguajes;
        $this->experienciaProgramador = $experienciaProgramador;
    }

    public function programar()
    {
        return $this->nombre . " programando en HTML" . "<br>";
    }
    public function repararOrdenador()
    {
        return $this->nombre . " Tiene la ram bastante pocha" . "<br>";
    }


    public function hacerOfimatica()
    {
        return $this->nombre . " te ha hecho un Pedazo word te hecho" . "<br>";
    }
}
