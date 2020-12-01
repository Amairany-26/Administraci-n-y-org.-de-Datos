<?php
require_once('./ClaseMiXML.php');
$archivo = "miArchivo.xml";
$xml = new miXML($archivo);

if (!file_exists($archivo)){
    $xml->crearXMLFile();
}

//obtenemos numero de registros
$nums = $xml->existenValores();
//echo $nums;

if ($nums == -1) {
    die ('Error al leer XML');
}

//captura de datos
$tit = $_POST['titulo'];
$año = $_POST['agno'];
$clasificacion = $_POST['clasificacion'];
$genero=$_POST['genero'];

//echo $tit . $año . $clasificacion . $genero;

// Para agregar registro
// aumentamos en uno el numero de registros para usarlo como nuevo id
$nums +=1;
// utilizamos el metodo insertPelicula de la clase Peliclass
$xml->insertPelicula($nums,$tit,$año,$genero,$clasificacion);
echo '<p>Registro completado con éxito...</p>';
header("refresh:3;url=verPeliculas.php");
?>
