<?php //creamos json
$json = '{"Pedro":35,"Benito":37,"Joel":43}';

//decodificamos a objeto
$obj = json_decode($json);

// utilzamos la notación de objetos ya conocida,
// mostramos valores de propiedades,
// cada nombre del json se convierte en propiedad.
// Recuerda que tenemos la paridad 'nombre:valor' en json
 echo $obj->Pedro;
 echo '<br>';
 echo $obj->Benito;
 echo '<br>'; echo $obj->Joel;
