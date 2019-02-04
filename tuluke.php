<?php
    if(isset($_REQUEST["valgus"])){
        $f=fopen("valgusandmed1.txt" , "a");
        fwrite($f, intval($_REQUEST["valgus"]).",".date("Y-m-d h:i:s")."\n");
        fclose($f);
        echo("Salvestati $_REQUEST[valgus]");
    }else{
        echo("Valguse andmed puuduvad");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tuluke kontroll</title>
    </head>
    <body>
    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
    </body>
</html>
