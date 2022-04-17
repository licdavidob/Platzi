<?php
// Problema: En una tienda de ropa hay descuento del 35% en todos sus productos, debes realizar una función que reciba el valor de cada producto y le reste el 35% para mostrar luego su valor original y en cuánto queda su nuevo valor a pagar.

class Oferta{
    private $Precio;
    private $Descuento;

    public function __construct($Precio,$Descuento){
        $this->Precio = $Precio;
        $this->Descuento = $Descuento;
    }

    public function Descuento(){
        $Precio = $this->Precio;
        $Descuento = $this->Descuento;
        $Auxiliar = ($Precio*$Descuento)/100;
        $Precio = $Precio - $Auxiliar;
        return $Precio; 
    }
}

$Precio = 200;
$Descuento = 35;

$Oferta = new Oferta($Precio,$Descuento);
echo $Oferta->Descuento()."\n";
?>