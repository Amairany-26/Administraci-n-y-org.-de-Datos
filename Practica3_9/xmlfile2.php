<?php
$nombreArchivo = "biblioteca.xml";

if (file_exists($nombreArchivo)){
    $miXML = simplexml_load_file($nombreArchivo)
        or die("Error: No se puede crear el objeto SimpleXMLElement");

    $autorLibro0 = $miXML->libro[0]->autor;
    $nombreLibro0 = $miXML->libro[0]->titulo;
    $añoLibro0 = $miXML->libro[0]->anio;
    $editorLibro0 = $miXML->libro[0]->editorial;
    $clasifLibro0 = $miXML->libro[0]->clasificacion;
    $idiomLibro0 = $miXML->libro[0]->idioma;
    $precioLibro0 = $miXML->libro[0]->precio;
    $modedaLibro0 = $miXML->libro[0]->precio->attributes()['moneda'];
    echo ("El primer libro \"" . $nombreLibro0 . "\" el autor es " . $autorLibro0 . "\" es del año " . $añoLibro0 . "\" la editorial es " . $editorLibro0 . " \" clasificación " . $clasifLibro0 . "\" esta en idioma " . $idiomLibro0 . "\" cuesta " . $precioLibro0 . " en " . $modedaLibro0);
    echo('<br>');
    echo('<br>');
    $autorLibro1 = $miXML->libro[1]->autor;
    $nombreLibro1 = $miXML->libro[1]->titulo;
    $añoLibro1 = $miXML->libro[1]->anio;
    $editorLibro1 = $miXML->libro[1]->editorial;
    $clasifLibro1 = $miXML->libro[1]->clasificacion;
    $idiomLibro1 = $miXML->libro[1]->idioma;
    $precioLibro1 = $miXML->libro[1]->precio;
    $modedaLibro1 = $miXML->libro[1]->precio->attributes()['moneda'];
    echo ("El segundo libro \"" . $nombreLibro1 . "\" el autor es " . $autorLibro1 . "\" es del año " . $añoLibro1 . "\" la editorial es " . $editorLibro1 . " \" clasificación " . $clasifLibro1 . "\" esta en idioma " . $idiomLibro1 . "\" cuesta " . $precioLibro1 . " en " . $modedaLibro1);
    echo('<br>');
    echo('<br>');
    $autorLibro2 = $miXML->libro[2]->autor;
    $nombreLibro2 = $miXML->libro[2]->titulo;
    $añoLibro2 = $miXML->libro[2]->anio;
    $editorLibro2 = $miXML->libro[2]->editorial;
    $clasifLibro2 = $miXML->libro[2]->clasificacion;
    $idiomLibro2 = $miXML->libro[2]->idioma;
    $precioLibro2 = $miXML->libro[2]->precio;
    $modedaLibro2 = $miXML->libro[2]->precio->attributes()['moneda'];
    echo ("El tercer libro \"" . $nombreLibro2 . "\" el autor es " . $autorLibro2 . "\" es del año " . $añoLibro2 . "\" la editorial es " . $editorLibro2 . " \" clasificación " . $clasifLibro2 . "\" esta en idioma " . $idiomLibro2 . "\" cuesta " . $precioLibro2 . " en " . $modedaLibro2);
}
