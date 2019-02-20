<?php
    $data = htmlspecialchars($_GET["location"]);
    $f=fopen("LocalState.txt", "w"); 
    fwrite($f, $data);
    fclose($f);
?>