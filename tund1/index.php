<?php
    if(isset($_POST['sees'])){
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
<!DOCTYPE html>
<html>
    <head>
        <title>Tuluke kontroll</title>
    </head>
    <body>
    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
        <input type="submit" name="sees" value="sees">
        <input type="submit" name="valjas" value="väljas">
    </body>
</html>
