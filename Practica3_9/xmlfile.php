<?php
$nombreArchivo = "biblioteca.xml";
if (file_exists($nombreArchivo)){
 $miXML = simplexml_load_file($nombreArchivo)
 or die("Error: No se puede crear el objeto SimpleXMLElement");
// var_dump($miXML);
var_dump($miXML->libro[0]->attributes());

// mostramos de manera legible el atributo isbn del primr libro
 //tres maneras de accederlos
 echo ($miXML->libro[0]->attributes()->isbn);
 echo('<br>');
 echo ($miXML->libro[0]->attributes()[0]);
 echo('<br>');
 echo ($miXML->libro[0]->attributes()['isbn']);
 echo('<br>');

 //mostramos el autor del segundo libro
 echo ($miXML->libro[1]->autor);

 //"accedemos/capturamos" el título, precio y la moneda del tercer libro
 $nombreLibro3 = $miXML->libro[2]->titulo;
 $precioLibro3 = $miXML->libro[2]->precio;
 $modedaLibro3 = $miXML->libro[2]->precio->attributes()['moneda'];
 //mostramos datos
 echo ("El tercer Libro \"" . $nombreLibro3 . "\"cuesta " . $precioLibro3 . " en
" . $modedaLibro3);
}
?>
