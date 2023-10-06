<?php
/**
 * @author joaki 
 */
require_once 'interface.php';
class iMac implements metodoInterface
{
    public $iphone;
    public $ipad;
    public $version;

    public function __construct($iphone, $ipad)
    {
        $this->iphone = $iphone;
        $this->ipad = $ipad;
    }
    public function iniciar()
    {
        return "está iniciando...<br>";
    }

    public function apagar()
    {
        return "se está apagando...<br>";
    }
    public function version($version)
    {
        return "el " . $this->iphone . " es el " . $version . "<br>";
    }
}
