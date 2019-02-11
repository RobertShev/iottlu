<?php
    $hum = 'niiskus: ' . htmlspecialchars($_GET["niiskus"]) . ', ';
    $temp = 'temperatuur: ' . htmlspecialchars($_GET["temp"]) . ', ';
    $ht = 'heat index: ' . htmlspecialchars($_GET["ht"]) . ' ';
    $date = date("Y-m-d h-i-s");
    $data = $hum.$temp.$ht.$date."\n";
    $f=fopen("dht22.txt", "a"); 
       fwrite($f, $data);
       fclose($f);
?>
<head>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
`    <table class="highchart" 
    data-graph-container=".. .. .highchart-container" 
    data-graph-type="line">
    <caption>Column example</caption>
    <thead>
        <tr>
        <th>Month</th>
        <th>Sales</th>
        <th>Benefits</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>January</td>
        <td>8000</td>
        <td>2000</td>
        </tr>
    
    ...
    
    </tbody>
    </table>
    <script>
        $(document).ready(function() {
        $('table.highchart').highchartTable();
        });
    </script>
</body>