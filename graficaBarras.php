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
 <DOCTYPE html>
 <html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mi tercera gráfica de representación de datos</title>
   <link rel="stylesheet" href="./CSS/chartist.min.css">
   <script src="./JS/chartist.min.js"></script>
</head>

<body>
    <h1>Grafica de Barras </h1>
  <div class="ct-chart ct-octave"></div>



    <script>
          var datos = {
               labels: ['Ningun Televisor', 'Un Televisor', 'Dos Televisores', 'Tres Televisores', 'Cuatro Televisores', 'Cinco Televisores'],
      series: [
           [<?php echo $num0.",".$num1.",".$num2.",".$num3.",".$num4.",".$num5 ?>]
    ]
};
      var opciones = {
       seriesBarDistance: 15
 };

   var opcionesResponsive = [
   ['screen and (min-width: 641px) and (max-width: 1024px)', {
       seriesBarDistance: 10,
       axisX: {
          labelInterpolationFnc: function (value) {
             return value;
       }
  }
}],
['screen and (max-width: 640px)', {
     seriesBarDistance: 5,
     axisX: {
        labelInterpolationFnc: function (value) {
            return value[0];
         }
      }
  }]
];

new Chartist.Bar('.ct-chart', datos, opciones, opcionesResponsive);
</script>
<div></div>

</body>

</html>
