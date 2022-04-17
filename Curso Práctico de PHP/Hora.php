<?php
// Problema: Convertir el formato de hora AM/PM a hora militar (AM/PM)
// Ejemplo: 03:00:00 PM -> 15:00:00

class Horario{
    private $Hora;
    private $Minuto;
    private $Segundo;
    private $Tiempo;

    public function __construct($Hora,$Minuto,$Segundo,$Tiempo){
        $this->Hora = $Hora;
        $this->Minuto = $Minuto;
        $this->Segundo = $Segundo;
        $this->Tiempo = $Tiempo;
    }

    public function Formato_AM_PM(){
        $Hora = $this->Hora;
        $Minuto = $this->Minuto;
        $Segundo = $this->Segundo;
        $Tiempo = $this->Tiempo;
        $Formato_AM_PM = $Hora.':'.$Minuto.':'.$Segundo.' '.$Tiempo;
        return $Formato_AM_PM; 
    }

    public function Formato_Militar(){
        $Hora = $this->Hora;
        $Minuto = $this->Minuto;
        $Segundo = $this->Segundo;
        $Tiempo = $this->Tiempo;

        if($Hora == 12 AND $Tiempo == 'AM'){
            $Hora = 00;
        }elseif ($Hora < 12 AND $Tiempo == 'PM') {
            $Hora = 12 + $Hora;
        }
        $Formato_Militar = $Hora.':'.$Minuto.':'.$Segundo;
        return $Formato_Militar;
    }
}

$Hora = 01;
$Minuto = 30;
$Segundo = 30;
$Tiempo = "PM";

$Horario = new Horario($Hora,$Minuto,$Segundo,$Tiempo);
echo $Horario->Formato_AM_PM()."\n";
echo $Horario->Formato_Militar();
?>