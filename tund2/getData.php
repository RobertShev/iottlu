<?php
    $data = array();
    $file = fopen("dht22raw.txt","r");
    while(! feof($file))
    {
        array_push($data,fgets($file));
    }
    fclose($file);
    print_r($data);
    echo json_encode($data);
?> 