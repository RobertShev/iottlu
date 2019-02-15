<?php
    $file = fopen("dht22taw.txt","r");
    while(! feof($file))
    {
        echo fgets($file). "<br />";
    }
    fclose($file);
?> 