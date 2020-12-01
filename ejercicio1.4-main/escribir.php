<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="viwport" content="width, initial-scale=1.0">
      <title>ejercicio1_4</title>
   </head>

  <body>
    <?php
        // decidimos el nombre que va a tener nuestro archivo
         $nombreArchivo = "archivoNuevo.txt";

        //abrimos archivo en modo escritura
         $archivo = fopen($nombreArchivo, "w")
           or die("Error al abrir el nuevo archivo");

        //escribimos en el archivo un texto calquiera de manera directa
         fwrite($archivo, "probando, probando, si, 1, 2, 3\n");

        //cerramos arrchivo
         fclose($archivo);

        //de manera opcional leemoos el contenido del archivo
         $texto = readfile($nombreArchivo);
         echo "<div> $texto </div>";

    ?>

</body>

</html>
