<?php

/**
 * **Diferencias entre include, include_once, require y require_once:**
 *
 * - **include:** Incluye el archivo. Si hay un error, continúa con la ejecución del script.
 *
 * - **include_once:** Incluye el archivo. Si hay un error, continúa con la ejecución del script. 
 *   Si el archivo ya ha sido incluido, no lo vuelve a incluir.
 *
 * - **require:** Incluye el archivo. Si hay un error, detiene la ejecución del script.
 *
 * - **require_once:** Incluye el archivo. Si hay un error, detiene la ejecución del script. 
 *   Si el archivo ya ha sido incluido, no lo vuelve a incluir.
 *
 * La utilización de estas funciones también promueve la modularización del código, 
 * permitiendo dividir lógicamente un programa en varios archivos, facilitando el 
 * mantenimiento y la reutilización del código. 
 * 
 * Una ventaja importante de la modularización es la organización estructurada
 * del código, lo que mejora su legibilidad y facilita el trabajo colaborativo
 * entre desarrolladores.
 */
