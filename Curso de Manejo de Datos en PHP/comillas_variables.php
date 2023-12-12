<?php
echo 'Un texto de una línea';

echo 'Un texto de 
varías líneas solo en código
no solo refleja en output';

echo 'Podemos escapar una comilla
simple así \' con un backslash \\ continuar con más texto <br>';

$nombre = 'David :)';
echo "Mi nombre es $nombre <br>"; //Puedes escribir variables dentro de comillas doble

// Imprimiendo variables complejas
$Cursos = [
    'Backend' =>[
        'PHP',
        'Laravel'
    ]
];

class Usuario{
    public $Nombre = 'David';
}
$Usuario = new Usuario;
echo "$Usuario->Nombre quiere aprender: ";
    // Se necesita poner dentro de llaves las variables complejas
echo "{$Cursos['Backend'][1]}";
