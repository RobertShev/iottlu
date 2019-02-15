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
<ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">TLU IOT</a>
          </li>
          <li class="breadcrumb-item active">Tund 1</li>
        </ol>
    <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
        <input type="submit" name="sees" value="sees" class="btn btn-success">
        <input type="submit" name="valjas" value="väljas" class="btn btn-danger">
<?php if($_GET['rel']!='tab'){ echo "</div>";} ?>


