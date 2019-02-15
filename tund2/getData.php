<?php
    $data = array();
    $dates = array();
    $file = fopen("dht22raw.txt","r");
    while(! feof($file))
    {   
        $value = explode(|,fgets($file))
        echo($value[0]);
        array_push($data,$value[0]);
        array_push($data,$value[1]);
    }
    fclose($file);
    //print_r($data);
    //echo json_encode($data);
?> 