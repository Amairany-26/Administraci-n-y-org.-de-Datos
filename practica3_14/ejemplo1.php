<?php

//Almacenando datos JSON en una variable PHP  // nota que el string tiene forma de json
 $miJson = '{"Pedro":35,"Benito":37,"Joel":43}';

//decodificamos el json, convertimos a objeto PHP // nota que no utilizamos assoc = true
 $obj = json_decode($miJson, false);

//mostramos contenido del objeto
var_dump($obj);  
