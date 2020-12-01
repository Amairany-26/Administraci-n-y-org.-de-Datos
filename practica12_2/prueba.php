<?php

//sabemos que el archivo con los datos es agenda.json
$archivo = './json/tempMyMByHour-14hrs.json';

//verificamos si existe
if (file_exists($archivo)) {

    //tratamos de abrirlo
    $handle = fopen($archivo, 'r')
        or die("Error: No se puede abrir el archivo json");

    //recuerda que necesitamos el tamano del archivo
    $size = filesize($archivo);
   //leemos el archivo como cualquier archivo de texto
   //recuperamos todo el contenido
   $contenido = fread($handle, $size);

   //cerramos el archivo
   fclose($handle);

   //AQUÍ RECONOCEMOS LOS DATOS JSON Y LOS CONVERTIMOS
   // LOS PASAMOS A UN ARREGLO Y OBTENDREMOS UNA LISTA DE DATOS
   $listaTemper = json_decode($contenido, true);

   echo '<br>';
    //recorremos para mostrar tanto la hora como la temperatura
    foreach ($listaTemper as $hora => $temp) {
       echo ($hora . ' - ' . $temp) . '<br>';
    }
}
