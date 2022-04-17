<?php
// Dibuja medio árbol de Navidad usando solo asteriscos
class Arbol{
    
    public function Dibujar($Nivel){
        for ($i=1; $i <= $Nivel; $i++) { 
            $Pintar = $i;
            while ($Pintar <= $i && $Pintar > 0) {
                echo "*";
                $Pintar--;
            }
            echo "\n";
        }
    }
}

$Arbol = new Arbol;
$Arbol->Dibujar(10); //Puedes ingresar cuantos niveles deseas que pinte
?>