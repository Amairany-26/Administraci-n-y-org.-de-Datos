<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Películas</title>
        <!-- estilos -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/estilos.css">
    </head>
    <body>
        <!-- Script inicial -->
        <?php
        $archivo = 'miArchivo.xml';
        if (file_exists("$archivo"))
        { //abrimos llave y la cerraremos en otro script
            $x = simplexml_load_file($archivo)
                or die("Error: No se puede abrir el archivo xml");
            //obtenemos la lista de películas para utilizarla en el siguiente script
            $lista = $x->pelicula;
            //obtenemos el tamaño de la lista
            $numPelis = count($lista);
        ?> <!-- cerramos el script para continuar con código HTML puro-->

        <!-- creamos un contenedor -->
        <div class="container">
            <h1 class="titulo">Lista de Películas</h1>
            <!-- encerramos la tabla en otro contenedor especial para poder manipularla con un scroll horizontal -->
            <div class="table-responsive">
                <table class="table">
                    <!-- Encabezado de tabla-->
                    <thead class="thead-dark">
                        <tr><!-- diseño del renglon de encabezado-->
                            <th>Id</th>
                            <th>Título</th>
                            <th>Año</th>
                            <th>Género</th>
                            <th>Clasificación</th>
                        </tr>
                    </thead>
                    <!-- cuerpo de la tabla -->
                    <tbody>
                        <!-- Script que continúa para ir mostrando los contactos en la página-->
                        <?php
                        for($i = 0; $i < $numPelis; $i++){
                            echo '<tr>';
                            echo '<td><b>' . $lista[$i]->attributes()->peli_id . '</b></td>';
                            echo '<td>' . $lista[$i]->titulo . '</b></td>';
                            echo '<td>' . $lista[$i]->año . '</td>';
                            echo '<td>' . $lista[$i]->genero . '</td>';
                            echo '<td>' . $lista[$i]->clasificacion . '</td>';
                            echo '</tr>';
                        }
                        ?> <!-- fin del script -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- script para poder cerrar el if que se abrió en el primer script -->
        <?php
            //cerramos el if que habíamos abierto en el script anterior
        }
        ?>
        <!-- continuamos elmcódigo HTML-->
    </body>
</html>
