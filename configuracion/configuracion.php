<?php
/**
 * @author joaki 
 */
class Configuracion
{
    public static $color = "blue";
    public static $newsletter = "no";
    public static $entorno = "administracio de empresas";


    public static function getColor()
    {
        return self::$color;
    }

    public static function setColor($color)
    {
        self::$color = $color;
    }

    public static function getNewsletter()
    {
        return self::$newsletter;
    }

    public static function setNewsletter($newsletter)
    {
        self::$newsletter = $newsletter;
    }

    public static function getEntorno()
    {
        return self::$entorno;
    }

    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }
}
