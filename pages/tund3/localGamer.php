<?php
    $location = htmlspecialchars($_GET["location"]);    
    $file = fopen("taken.txt","r");
        while(!feof($file))
        {
            array_push($data,fgets($file));
        }
        fclose($file);
        $dataSize = sizeof($data);
        $taken = 0;
        if($dataSize>0){
            for($i=0; $i<$dataSize; $i++){
                if($data[$i] == $location){
                    $taken = 1;
                }
            }
        }
        if($taken == 0)
        {
            $f=fopen("LocalState.txt", "w");
            fwrite($f, $location);
            fclose($f);
            $f=fopen("taken.txt", "a");
            fwrite($f, $location."\n");
            fclose($f);            
        }
        else{echo("Location taken");}
?>