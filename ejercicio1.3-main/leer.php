<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viwport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edege">
    <title>Docuement</title>
</head> 
<body>
<?php
         $nombreArchivo = "lorem.txt";
         $archivo = fopen ($nombreArchivo, "r" ); //abrimos archivo

         if( $archivo == false ) {
         echo ( "Error al abrir archivo" );
         exit();
         }

         $size = filesize( $nombreArchivo ); //obtenemos tamaño del archivo
         $elTexto_archivo = fread( $archivo, $size );//leemos contenido del archivo
         fclose( $archivo ); //cerramos archivo
         
         echo ( "File size : $size bytes" );
         echo ( "<pre>$elTexto_archivo</pre>" );
       ?>
</body>
</html>