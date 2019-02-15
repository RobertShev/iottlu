<?php
    if(isset($_GET["kp"] && $_GET["kp2"])){
        $f=fopen("dht22.txt", "a");
        $kp = $_GET["kp"];
        $kp2 = $_GET["kp2"];
        $data = [];
        foreach($f as $line){
            $splitline = $line.explode("|",$line);
            $date = strtotime($splitline[1]);
            if($date>=$kp && $date<=$kp2){
                array_push($data, $line)
            }
        }
    }

    $f=fopen("dht22.txt", "a");
    $data = [];
    foreach($f as $line){
        array_push($data, $line);
    }
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>