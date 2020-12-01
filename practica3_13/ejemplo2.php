<?php
//arreglo normal -indexado
$autos = array("Volvo", "BMW", "Toyota");
//convertimos arreglo asociativo en json
$mijson = json_encode($autos);
//mostrammos variable
echo $mijson;
