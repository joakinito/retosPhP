<?php
/**
 * @author joaki 
 */
require_once 'informatico.php';
class TecnicoRedes extends Informatico
{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador, $auditarRedes, $experienciaRedes)
    {
        parent::__construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador);
        $this->auditarRedes = $auditarRedes;
        $this->experienciaRedes = $experienciaRedes;
    }


    public function getAuditarRedes()
    {
        return $this->auditarRedes;
    }


    public function setAuditarRedes($auditarRedes)
    {
        $this->auditarRedes = $auditarRedes;
    }


    public function getExperienciaRedes()
    {
        return $this->experienciaRedes;
    }


    public function setExperienciaRedes($experienciaRedes)
    {
        $this->experienciaRedes = $experienciaRedes;
    }


    public function auditarRedes()
    {
        if (!empty($this->auditarRedes)) {
            return "auditando redes" . "<br>";
        } else {
            return "jugando fifa" . "<br>";
        }
    }
}
