<?php
//ubicamos el archivo para manejarlo en una variable
$archivoTemps = "./csv/tempMyMWeek.csv";
//abrimos el archivo en modo lectura para poder leerlo
$handle = fopen($archivoTemps,"r") or die("No se puede abrir el archivo: $archivoTemps");
//preparamos tres arreglos para capturar
//los tres registros que ya sabemos que existen
$d_encabezados = array();
$d_temp_max = array();
$d_temp_min = array();
//obtenemos los tres renglones/registros
//el siguiente orden es esencial, ya que así vienen en el archivo
$d_encabezados = fgetcsv($handle, 0, ',', '"', '"');
$d_temp_max = fgetcsv($handle, 0, ',', '"', '"');
$d_temp_min = fgetcsv($handle, 0, ',', '"', '"');
//en este momento ya tenemos tres arreglos con todos los datos
print (var_dump($d_encabezados));
print('<hr>');
print (var_dump($d_temp_max));
print('<hr>');
print (var_dump($d_temp_min));
