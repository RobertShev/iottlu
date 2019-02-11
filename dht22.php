<?php
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $f=fopen("dht22.txt", "a");
       $hum = 'niiskus: ' . htmlspecialchars($_GET["niiskus"]) . ',';
       $temp = 'temperatuur: ' . htmlspecialchars($_GET["temp"]) . ',';
       $ht = 'heat index: ' . htmlspecialchars($_GET["ht"]) . ''; 
       fwrite($f, $hum);
        fwrite($f, $temp);
        fwrite($f, $ht);
        fclose($f);
    }
}
?>
<h1>HI</h1>