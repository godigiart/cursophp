<?php

/* CURSO PHP - OBJETOS */

class Vehiculo
{
    protected $color;
    protected $marca;
    protected $antiguedad;

    function __construct($c,$m,$a)
    {
        $this->color = $c;
        $this->marca = $m;
        $this->antiguedad = $a;
    }

    function detalles()
    {
        return (object)array('colorv' => $this->color,'marcav' => $this->marca,'antiguedadv' => $this->antiguedad);
    }
}

class Coche extends Vehiculo
{

}

class Moto extends Vehiculo 
{
    function devolucion()
    {
        return "La moto es de color " . $this->color .", de marca " . $this->marca .", y del año " . $this->antiguedad; 
    }
}



$vehiculo = new Coche("Rojo","Audi","2007");




$vehiculo2 = new Moto("Amarillo","Suzuki","2014");

echo $vehiculo2->devolucion();



?>