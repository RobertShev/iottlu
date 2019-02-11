<?php
    echo 
    echo 
    echo 
?>
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
    if(isset($_GET['niiskus'])){
        $f=fopen("tulukekodune.txt", "w");
        fwrite($f, 1);
        fclose($f);
    }
    else if(isset($_POST['valjas'])){
        $f=fopen("tulukekodune.txt", "w");
        fwrite($f, 0);
        fclose($f);
    }
?>