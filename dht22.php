<?php
    $hum = 'niiskus: ' . htmlspecialchars($_GET["niiskus"]) . ',';
    $temp = 'temperatuur: ' . htmlspecialchars($_GET["temp"]) . ',';
    $ht = 'heat index: ' . htmlspecialchars($_GET["ht"]) . '';
    $f=fopen("dht22.txt", "a"); 
       fwrite($f, $hum);
        fwrite($f, $temp);
        fwrite($f, $ht);
        fclose($f);
?>
