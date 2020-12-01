<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viwport" content="width, initial-scale=1.0">
    <title>Leyendo linea a linea</title>
    <style media="screen">
      body{
        background-color: #fafafa;
        margin: 30px;
        padding: 10px;
        display: inline-block;
        }
    </style>
</head>
<body>
    <?php
    $archivo = array();
    $datos = fopen("datos.txt", "r")
       or die("No se puede abrir el archivo!");
       //leemos el archivo
      while (!feof($datos)) {
          //Agregamos los datos a un array
          array_push($archivo, floatval(fgets($datos)));//Usamos floatval para guardar como float en el array
    }
    //Cerramos el archivo
    fclose($datos);
$promedio=0;
echo "Estos son los pH:<br>";
//Buscamos todos los archivos del array para sacar la media
foreach($archivo as $v) {
    $promedio=floatval($v)+$promedio;
    echo $v . "<br>";
}
$promedio=$promedio/sizeof($archivo); //sizeof sirve para saber la cantidad de elementos que tiene el array.
//La función round sirve para redondear decimales
echo "<br>La media fue de: ".round($promedio,2)."<br>";
$G=max($archivo);//Sacamos el valor maximo del array
$P=min($archivo);//Sacamos el numero de menos valor del array
$G=floatval($G);
$P=floatval($P);

$RGrande=$G-$promedio;
echo "G - M = ".round($RGrande,2)."<br>";
$RPequeno=$promedio-$P;
echo "P - M = ".round($RPequeno,2)."<br>";

if($RGrande > $RPequeno){//Verificamos si el resultado del numero mas grande es mayor que el del numero mas bajo
  echo "<br>".round($RGrande,2)." > ".round($RPequeno,2)." por lo tanto<br>";
  echo "El más alejado es G = ".$G. "<br>";
  $band=$G;
}else{
  echo "<br>".round($RPequeno,2)." > ".round($RGrande,2)." por lo tanto<br>";
  echo "El más alejado es P = ".$P. "<br>";
  $band=$P;
}
echo "<br>Los nuevos pH sin el valor -1 :<br> ";
$NuevoArchivo = array();
$promedioN=0;
//Leemos todos los datos del array.
foreach ($archivo as $v) {

    if($v != $band){//Verificamos cual es el numero más lejos de la media para no agregarlo
      array_push($NuevoArchivo, $v);//Creamos un nuevo arreglo sin el numero mencionado anteriormente
      $promedioN=floatval($v)+$promedioN;//Sacamos la nueva media
    }
}
foreach ($NuevoArchivo as $v) {
    echo $v . "<br>";
}
$promedioN=$promedioN/sizeof($NuevoArchivo);//Sacamos el nuevo promedio o media
echo "<br>La nueva media es ".round($promedioN,2)

    ?>
</body>
</html>
