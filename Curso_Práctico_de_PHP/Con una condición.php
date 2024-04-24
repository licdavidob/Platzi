<?php
// En una escuela están almacenando los juguetes favoritos de los estudiantes de acuerdo a su edad en un lugar específico de la bodega de esta forma:
//     Quienes sean menores de 5 años tendrán sus espacios en la parte inferior de la bodega.
//     Quienes tengan entre 5 y 7 años tendrán sus espacios en la parte media de la bodega.
//     Quienes tengan más de 7 años tendrán sus espacios en la parte alta de la bodega.
//     Quienes no tengan registro de su edad aún tendrán un espacio de almacenamiento en la bodega de al lado.
// Según una lista que contiene las edades de cada estudiante debes validar su edad y mostrar a través de un mensaje en dónde tendrán que almacenar sus juguetes.

class Bodega{
    
    public function Estudiantes($Estudiantes){
        foreach ($Estudiantes as $Edad) {
            $this->Clasificar($Edad);
        }
    }

    private function Clasificar($Edad){
        if ($Edad > 0 && $Edad < 5) {
            $Bodega = "Inferior";
        } else if ($Edad >= 5 && $Edad <= 7) {
            $Bodega = "Media";
        } else if($Edad > 7){
            $Bodega = "Alta";
        } else{
            $Bodega = "Indefinida";
        }

        switch ($Bodega) {
            case 'Inferior':
                echo "El estudiante con ".$Edad." años de edad tendrá sus juguetes en la parte inferior de la bodega\n";
                break;
            case 'Media':
                echo "El estudiante con ".$Edad." años de edad tendrá sus juguetes en la parte media de la bodega\n";
                break;
            case 'Alta':
                echo "El estudiante con ".$Edad." años de edad tendrá sus juguetes en la parte alta de la bodega\n";
                break;    
            default:
                echo "El estudiante tendrá sus juguetes en un espacio de almacenamiento en la bodega de al lado\n";
                break;
        }
        
    }
}

$Estudiantes = array(4,6,10,'undefined');
$Bodega = new Bodega;
$Bodega->Estudiantes($Estudiantes);

?>