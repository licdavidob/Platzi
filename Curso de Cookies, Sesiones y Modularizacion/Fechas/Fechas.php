<?php

/**
 * date(formato, timestamp): string
 * Devuelve la fecha formateada según el formato indicado.
 * Se utiliza más en la programación estructurada.
 */

echo date('d-m-Y H:i:s') . "\n";

/**
 * class DateTime(string $time = "now", DateTimeZone $timezone = NULL)
 * Devuelve un objeto DateTime con la fecha y hora actual.
 * Se utiliza mas en la programación orientada a objetos.
 */

$fecha = new DateTime();
echo $fecha->format('d-m-Y H:i:s') . "\n";


/**
 * class DateInterval(string $interval_spec)
 * Devuelve un objeto DateInterval con el intervalo de tiempo indicado.
 * Se utiliza más para sumar o restar fechas.
 */

$fecha = new DateTime();

//Suma un día a la fecha actual
$fecha->add(new DateInterval('P1D'));
echo $fecha->format('d-m-Y H:i:s') . "\n";

//Resta un día a la fecha actual
$fecha->sub(new DateInterval('P1D'));
echo $fecha->format('d-m-Y H:i:s') . "\n";
