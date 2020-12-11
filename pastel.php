<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head runat="server">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>TyroDeveloper</title>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajax({
                    type: 'POST',
                    url: "highcharts-pastel.php",
                    dataType: "json",
                    contentType: 'application/json',
                    async: false,
                    success: function (result) {
                        var options = {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie',
                                renderTo: 'pie-chart'
                            },
                            title: {
                                text: ''
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: true
                                    },
                                    showInLegend: true
                                }
                            },
                            series: [result]
                        };
                        var chart = new Highcharts.Chart(options);
                    }
                });

            });
        </script>

    </head>
    <body>

      <h1>Grafica de Pastel </h1>
        <form id="frmChart" runat="server">
            <div>
                <div id="pie-chart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
            </div>
        </form>


    </body>
</html>
