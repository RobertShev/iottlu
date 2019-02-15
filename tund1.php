<?php
    if(isset($_POST['sees'])){
        $f=fopen("pages/tund1/tulukekodune.txt", "w");
        fwrite($f, 1);
        fclose($f);
    }
    else if(isset($_POST['valjas'])){
        $f=fopen("pages/tund1/tulukekodune.txt", "w");
        fwrite($f, 0);
        fclose($f);
    }
?>
<?php if($_GET['rel']!='tab'){ echo "</div>";} ?>
    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
        <input type="submit" name="sees" value="sees">
        <input type="submit" name="valjas" value="väljas">


