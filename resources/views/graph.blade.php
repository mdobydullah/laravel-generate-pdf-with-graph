<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
    </style>
    {{-- make sure you are using http, and not https --}}
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script type="text/javascript">
        function init() {
            google.load("visualization", "1.1", {
                packages: ["corechart"],
                callback: 'drawChart'
            });
        }

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Pizza');
            data.addColumn('number', 'Populartiy');
            data.addRows([
                ['Pepperoni', 33],
                ['Hawaiian', 26],
                ['Mushroom', 22],
                ['Sausage', 10], // Below limit.
                ['Anchovies', 9] // Below limit.
            ]);

            var options = {
                title: 'Popularity of Types of Pizza',
                sliceVisibilityThreshold: .2
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>

<body onload="init()">

<h2 style="text-align: center; ">Generate PDF with Graph in Laravel</h2>
<div id="chart_div" class="pie-chart"></div>
<h2 style="text-align: center; ">MyNotePaper.com</h2>

</body>
</html>
