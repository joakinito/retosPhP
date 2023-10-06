<?php
/**
 * @author joakin
 */
class Coche
{
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballos = 500;
    public $plazas = 2;

    public function __construct($color, $marca, $modelo, $velocidad, $caballos, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballos = $caballos;
        $this->plazas = $plazas;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color)
    {
        $this->color = $color;
    }


    public function getMarca()
    {
        return $this->marca;
    }


    public function setMarca($marca)
    {
        $this->marca = $marca;
    }


    public function getModelo()
    {
        return $this->modelo;
    }


    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }


    public function getVelocidad()
    {
        return $this->velocidad;
    }


    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }


    public function getCaballos()
    {
        return $this->caballos;
    }


    public function setCaballos($caballos)
    {
        $this->caballos = $caballos;
    }


    public function getPlazas()
    {
        return $this->plazas;
    }


    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;
    }

    public function acelerar()
    {
        //esto es igual $this->velocidad+1;
        $this->velocidad++;
    }


    public function frenar()
    {
        //esto es igual $this->velocidad-1;
        $this->velocidad--;
    }


    public function mostrarInformacion()
    {
        if (!empty($this->caballos) || !empty($this->color) || !empty($this->marca) || !empty($this->modelo) || !empty($this->velocidad) || !empty($this->plazas)) {
            $info = "Información del Coche:<br>" .
                "Color = " . $this->color . "<br>" .
                "Marca = " . $this->marca . "<br>" .
                "Modelo = " . $this->modelo . "<br>" .
                "Velocidad = " . $this->velocidad . " km/h<br>" .
                "Caballaje = " . $this->caballos . " CV<br>" .
                "Plazas = " . $this->plazas . "<br>" .
                "----------------------------------------" . "<br>";
            return $info;
        } else {
            return "esta vacio";
        }
    }
}
