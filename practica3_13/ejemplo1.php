<?php
//arreglo asociativo con edades
$edades = array("Pedro"=>35, "Benito"=>37, "Joel"=>43);
//convertimos arreglo asociativo en json
$mijson = json_encode($edades);
//mostrammos variable
echo $mijson;
