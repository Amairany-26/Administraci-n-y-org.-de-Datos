<?php
//requerimos llamar al archivo que iene la clase
// Contacto para poder usarla


require_once('carpeta/ClassContacto.php');

//definimos el nombre del archivo para el JSON
$archivo_json = "agenda.json";

//para simular que los contactos vienen de algun lado
// creamos dos objetos de la clase 'Contacto', contacto1 y contacto2
// esta vez no los capturamos desde formulario

$contacto1 = new Contacto(
    "Jesus",
    "Santillana Araiza",
    "2000-02-12",
    "Soltero",
    "Gómez Palacio",
    "jglez@itsl.mx",
    "@jglezz"
);
// inventamos otro contacto
$contacto2 = new Contacto(
    "Jennifer",
    "Salais Palacios",
    "2000-08-02",
    "Soltera",
    "Durango",
    "jSalais@itsl.mx",
    "@Salais"
);
// inventamos otro contacto
$contacto3 = new Contacto(
    "Panfilo",
    "Montalvo Castor",
    "1928-11-01",
    "Viudo",
    "Durango",
    "pmontalvo@gmail.com",
    "@PAnfilito"
);

//preparamos un arreglo para los contactos
$contactos = array();

//agregamos el primer contacto
$contactos[] = $contacto1;

//agregamos el segundo contacto
$contactos[] = $contacto2;

//agregamos el segundo contacto
$contactos[] = $contacto3;

// en ejercicios anteriores los creabamos a partir de simples strings
// Ahora creamos el json a partir de los objetos (es más limpio el código)
$json_string = json_encode($contactos);

// Pasamos el string en formato json a un archivo
// es decir escribiremos en un archivo común
// como en la primera unidad
// creamos un archivo en modo 'w'
$arch = fopen($archivo_json,'w');
if( $arch == false ) {
    echo ( "Error al abrir el archivo" );
    exit();
}

//escribimos en el archivo el string que contiene el json
fwrite($arch,$json_string);

//cerramos el archivo como se debe
fclose($arch);

//mostramos mensaje de que se escribieron los datos
echo '<h3>Datos escritos en agenda.json </h3>';

//redirigimos para mostrar resultados desde el archivo creado
header("refresh:2;url=mostrar_json.php");
?>
