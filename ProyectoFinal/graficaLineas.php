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
                <h1>Grafica de Lineas </h1>

            <div class="ct-chart ct-octave"></div>
            <?php
            $fila = 1;
            $num0 = 0;
            $num1 = 0;
            $num2 = 0;
            $num3 = 0;
            $num4 = 0;
            $num5 = 0;
            if (($gestor = fopen("datosCrudos.csv", "r")) !== FALSE) {
                while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
                    $numero = count($datos);
                    $fila++;
                    for ($c=0; $c < $numero; $c++) {
                        //echo $datos[$c] . "<br />\n";
                        if ($datos[$c]=="0"){
                          $num0++;
                        }elseif ($datos[$c]=="1"){
                          $num1++;
                        }elseif ($datos[$c]=="2"){
                          $num2++;
                        }elseif ($datos[$c]=="3"){
                          $num3++;
                        }elseif ($datos[$c]=="4"){
                          $num4++;
                        }elseif ($datos[$c]=="5"){
                          $num5++;
                        }
                    }
                }
                fclose($gestor);
            }
            ?>
            <script>
                var datos = {
                    labels: [

                    ],

                    series: [{
                        name: 'serie-1',
                        data: [
                            <?php echo $num0; ?>,
                            <?php echo $num1; ?>,
                            <?php echo $num2; ?>,
                            <?php echo $num3; ?>,
                            <?php echo $num4; ?>,
                            <?php echo $num5; ?>

                        ]
                    }, {
                        name: 'serie-2',
                        data: [

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
