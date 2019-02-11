<?php
    $hum = 'niiskus: ' . htmlspecialchars($_GET["niiskus"]) . ', ';
    $temp = 'temperatuur: ' . htmlspecialchars($_GET["temp"]) . ', ';
    $ht = 'heat index: ' . htmlspecialchars($_GET["ht"]) . ' ';
    $date = date("Y-m-d h-i-s");
    $data = $hum.$temp.$ht.$date.'; /n';
    $f=fopen("dht22.txt", "a"); 
       fwrite($f, $data);
       fclose($f);
?>
