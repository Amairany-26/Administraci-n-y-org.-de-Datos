<?php
//Almacenando datos JSON en una variable PHP  // nota que el string tiene forma de json
$miJson = '{"Pedro":35,"Benito":37,"Joel":43}';

//decodificamos el json, convertimos a objeto PHP // usamoa ahora assoc = true para convertir el json  //en arreglo asociativo en vez de objeto estandar
 $obj = json_decode($miJson, true);

//mostramos contenido del objeto
var_dump($obj); 
