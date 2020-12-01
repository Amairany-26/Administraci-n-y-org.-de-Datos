<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/estilos.css">
        <title>Mostrando contactos json</title>
    </head>
    <body>
        <!-- abrimos script para iniciar con la apertura del archivo json-->
        <?php
        //sabemos que el archivo con los datos es agenda.json
        $archivo = 'agenda.json';
        //verificamos si existe
        if (file_exists("$archivo")) {
            //tratamos de abrirlo
            $x = fopen($archivo, 'r')
                or die("Error: No se puede abrir el archivo json");

            //recuerda que necesitamos el tamano del archivo
            $size = filesize($archivo);
            //leemos el archivo como cualquier archivo de texto
            //recuperamos todo el contenido
            $contenido = fread($x, $size);

            //cerramos el archivo
            fclose($x);

            //AQUÍ RECONOCEMOS LOS DATOS JSON Y LOS CONVERTIMOS
            // LOS PASAMOS A UN ARREGLO Y OBTENDREMOS UNA LISTA DE DATOS
            $listaContactos = json_decode($contenido, true);

            //obtenemos el tamaño de la lista para poder recorrerla
            // NOTA:
            // cada contacto es un arreglo asociativo
            // por lo tanto la lista de contactos es un arreglo de arreglos
            $numContactos = count($listaContactos);
        ?> <!-- cerramos el script para continuar con código HTML puro-->

        <div class="container">
            <h1 class="titulo">Lista de Contactos</h1>
            <div class="table-responsive">
                <table class="table">
                    <!-- Encabezado de tabla-->
                    <thead class="thead-dark">
                        <tr>
                            <!-- diseño del renglon de encabezado-->
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>F Nacimiento</th>
                            <th>Estado Civil</th>
                            <th>Origen</th>
                            <th>Correo</th>
                            <th>Redes</th>
                        </tr>
                    </thead>
                    <!-- cuerpo de la tabla -->
                    <tbody>
                        <!-- Script que continúa para ir mostrando los contactos en la página-->
                        <?php
                        for ($i = 0; $i < $numContactos; $i++) {
                            echo '<tr>';
                            // Como dijomos antes cada contacto es un arreglo asociativo
                            // por lo tanto tenemos una matriz o un areglo de arreglos
                            // recuerda la nomenclatura de un arreglo de arreglos es [][],
                            // con dos pares de corchetes uno seguido del otro
                            // así que recorremos cada iesimo contacto y cada
                            // uno de ellos tendrá nombre, apellidos, etc.
                            echo '<td>' . $listaContactos[$i]['nombre'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['apellidos'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['fecha_nac'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['estado_civil'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['origen'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['correo'] . '</td>';
                            echo '<td>' . $listaContactos[$i]['redes'] . '</td>';
                            echo '</tr>';
                        } //fin for
                        ?> <!-- fin del script -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- script para poder cerrar el if que se abrió en el primer script -->
    <?php
    } //cerramos el if que habíamos abierto en el script anterior
    ?>
    <!-- continuamos el código HTML-->
    </body>
</html>
