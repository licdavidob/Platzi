<?php

//Establecer la zona horaria
date_default_timezone_set('America/Mexico_City');

//Fecha actual
$now1 = date('d-m-Y H:i:s'); // Devuelve un string
$now2 = date_create(); // Devuelve un objeto DateTime

echo "now1 : $now1 \n";
echo "now2 : {$now2->format('d-m-Y H:i:s')} \n";


//strtotime - Fecha/Hora textual a timestamp Unix
$timestampUnix = strtotime($now1);
$timestampUnix2 = strtotime('17 April 2023');
$timestampUnix3 = strtotime('tomorrow');
$timestampUnix4 = strtotime('next Monday');
$timestampUnix5 = strtotime('+1 day');
$timestampUnix6 = strtotime('+1 week');
$timestampUnix7 = strtotime('+1 week 2 days 4 hours 2 seconds');
$timestampUnix8 = strtotime('last Thursday');

$lastThursday = date('d-m-Y H:i:s', $timestampUnix8);
$nextWeek = date('d-m-Y H:i:s', $timestampUnix6);

echo "timestampUnix : $timestampUnix \n";
echo "timestampUnix2 : $timestampUnix2 \n";
echo "timestampUnix3 : $timestampUnix3 \n";
echo "timestampUnix4 : $timestampUnix4 \n";
echo "timestampUnix5 : $timestampUnix5 \n";
echo "timestampUnix6 : $timestampUnix6 \n";
echo "timestampUnix7 : $timestampUnix7 \n";
echo "timestampUnix8 : $timestampUnix8 \n";
echo "lastThursday : $lastThursday \n";
echo "nextWeek : $nextWeek \n";
