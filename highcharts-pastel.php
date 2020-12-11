<?php
$fila = 1;
$num0 = 0;
$num1 = 0;
$num2 = 0;
$num3 = 0;
$num4 = 0;
$num5 = 0;
//abrir el archivo csv para leerlo
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

include("HighCharts.php");

$chart = new HighChartsPie();

$chart->name = "Tipo";
$chart->colorByPoint = true;

//Inicializar datos
$chart->data = array();

//Agregar los televisores
$chart_column = new Data();
$chart_column->name = "Ningun Televisor";
$chart_column->y = $num0;
$chart_column->color = "#00FF00";
array_push($chart->data, $chart_column); //Numero 1

$chart_column = new Data();
$chart_column->name = "Un Televisor";
$chart_column->y = $num1;
$chart_column->color = "#BE4C34";
array_push($chart->data, $chart_column); //Numero 2


$chart_column = new Data();
$chart_column->name = "Dos televisores";
$chart_column->y = $num2;
$chart_column->color = "#BEA534";
array_push($chart->data, $chart_column); //Numero 3

$chart_column = new Data();
$chart_column->name = "Tres televisores";
$chart_column->y = $num3;
$chart_column->color = "#24CAC2";
array_push($chart->data, $chart_column); //Numero 4


$chart_column = new Data();
$chart_column->name = "Cuatro televisores";
$chart_column->y = $num4;
$chart_column->color = "#13F111";
array_push($chart->data, $chart_column); //Numero 5

$chart_column = new Data();
$chart_column->name = "Cinco televisores";
$chart_column->y = $num5;
$chart_column->color = "#13F111";
array_push($chart->data, $chart_column); //Numero 5
echo json_encode($chart);
