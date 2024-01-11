<?php

//Estrucutrada

$date = date_create();
$interval = date_interval_create_from_date_string('1 day');
date_add($date, $interval);

echo date_format($date, 'd-m-Y H:i:s') . "\n";


//POO
$date = new DateTime();
$interval = DateInterval::createFromDateString('1 day');
$date->add($interval);

echo $date->format('d-m-Y H:i:s') . "\n";
