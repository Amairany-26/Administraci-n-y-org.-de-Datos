<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gráfica de temperaturas mayo 2019</title>
        <link rel="stylesheet" href="./css/chartist.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/estilos.css">
        <script src="./js/chartist.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="centro">
                <h1>Temperaturas tomadas durante 10 días </h1>
                <span class="temp"><span class="temp-box max">&nbsp;</span>&nbsp; Temperturas Máximas</span>
                <span class="temp"><span class="temp-box min">&nbsp;</span>&nbsp; Temperturas Mínimas</span>
                <span class="subt">Fecha: del 22 al 31 de mayo de 2019</span>
            </div>
            <div class="ct-chart ct-octave"></div>
            <?php
            //ubicamos el archivo para manejarlo en una variable
            $archivoTemps = "./csv/tempMyMWeek.csv";
            //abrimos el archivo en modo lectura para poder leerlo
            $handle = fopen($archivoTemps, "r") or die("No se puede abrir el archivo: $archivoTemps");
            //preparamos/declaramos tres arreglos para capturar
            // los tres registros que ya sabemos que existen
            $d_encabezados = array();
            $d_temp_max = array();
            $d_temp_min = array();
            //obtenemos los tres renglones/registros
            //el siguiente orden es esencial, ya que así vienen en el archivo
            $d_encabezados = fgetcsv($handle, 0, ',', '"', '"');
            $d_temp_max = fgetcsv($handle, 0, ',', '"', '"');
            $d_temp_min = fgetcsv($handle, 0, ',', '"', '"');
            ?>
            <script>
                var datos = {
                    labels: [
                        '<?php echo $d_encabezados[0]; ?>',
                        '<?php echo $d_encabezados[1]; ?>',
                        '<?php echo $d_encabezados[2]; ?>',
                        '<?php echo $d_encabezados[3]; ?>',
                        '<?php echo $d_encabezados[4]; ?>',
                        '<?php echo $d_encabezados[5]; ?>',
                        '<?php echo $d_encabezados[6]; ?>',
                        '<?php echo $d_encabezados[7]; ?>',
                        '<?php echo $d_encabezados[8]; ?>',
                        '<?php echo $d_encabezados[9]; ?>'
                    ],

                    series: [{
                        name: 'serie-1',
                        data: [
                            <?php echo $d_temp_max[0]; ?>,
                            <?php echo $d_temp_max[1]; ?>,
                            <?php echo $d_temp_max[2]; ?>,
                            <?php echo $d_temp_max[3]; ?>,
                            <?php echo $d_temp_max[4]; ?>,
                            <?php echo $d_temp_max[5]; ?>,
                            <?php echo $d_temp_max[6]; ?>,
                            <?php echo $d_temp_max[7]; ?>,
                            <?php echo $d_temp_max[8]; ?>,
                            <?php echo $d_temp_max[9]; ?>
                        ]
                    }, {
                        name: 'serie-2',
                        data: [
                            <?php echo $d_temp_min[0]; ?>,
                            <?php echo $d_temp_min[1]; ?>,
                            <?php echo $d_temp_min[2]; ?>,
                            <?php echo $d_temp_min[3]; ?>,
                            <?php echo $d_temp_min[4]; ?>,
                            <?php echo $d_temp_min[5]; ?>,
                            <?php echo $d_temp_min[6]; ?>,
                            <?php echo $d_temp_min[7]; ?>,
                            <?php echo $d_temp_min[8]; ?>,
                            <?php echo $d_temp_min[9]; ?>
                        ]
                    }]
                };
                var opciones = {
        //No dibujar los puntos del gráfico de líneas
        showPoint: false,
        // Deshabilitar suavizado de línea
        lineSmooth: false,
        // Configuración específica del eje X
        axisX: {
           //Podemos deshabilitar la cuadrícula para este eje
           showGrid: false,
           // y tampoco mostrar la etiqueta
           showLabel: false
   },
   // Configuración específica del eje Y
   axisY: {
       // Vamos a mover un poco el margen izquierdo de las etiquetas
       offset: 60,
        // La función de interpolación de etiquetas permite modificar
       //los valores utilizados para las etiquetas en cada eje.
       // Aquí estamos convirtiendo los valores en millones de libras.
       labelInterpolationFnc: function (value) {
           return value;
        }
     }
};

// Todo lo que necesitas hacer es pasar la configuración
// como tercer parámetro a la función de gráfico
new Chartist.Line('.ct-chart', datos, opciones);
</script>
 <div></div>

 </body>
</html>
