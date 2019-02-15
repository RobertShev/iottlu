<?php
    $file = fopen("dht22raw.txt","r");
    while(! feof($file))
    {
        echo fgets($file). "<br />";
    }
    fclose($file);
?> 