<?php
class Operador{
    
    public function AND($Valor1,$Valor2){
     if ($Valor1 && $Valor2) {
         return true;
     } else {
         return false;
     }
    }

    public function OR($Valor1,$Valor2){
        if ($Valor1 || $Valor2) {
            return true;
        } else {
            return false;
        }
       }

    public function XOR($Valor1,$Valor2){
        if ($Valor1 XOR $Valor2) {
            return true;
        } else {
            return false;
        }
       }

    public function NOT($Valor1){
        if (!$Valor1) {
            return true;
        } else {
            return false;
        }
       }
}
$Valor1 = true;
$Valor2 = false;

$Operador = new Operador();
echo $Operador->AND($Valor1,$Valor2)."\n";  //Retornara valor false/0
echo $Operador->OR($Valor1,$Valor2)."\n";   //Retornara valor true/1
echo $Operador->XOR($Valor1,$Valor2)."\n";  //Retornara valor true/1
echo $Operador->NOT($Valor1)."\n";          //Retornara valor false/0
?>