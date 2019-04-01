<?php
    $mode = $_GET["gameMode"];
    $modeRef = 0;
    if($mode == "LvsL"){$modeRef= 1; echo "mode is LvsL\n";} 
    else if($mode == "LvsO"){$modeRef= 1; echo "mode is LvsO\n";} 
    else if($mode == "OvsO"){$modeRef= 1; echo "mode is OvsO\n";}
    if($modeRef = 1)
    {
        $f=fopen("mode.txt", "w");
        fwrite($f, $mode);
        fclose($f);
    }else{echo "gameMode is not recognized";}

    echo("Game started");
    if(isset($_POST['submit']))
    {
        $radio_value = $_POST["radio"];
        switch ($radio_value) {
            case "1x1":
                echo " equals 1x1";
                $selected = $radio_value;
                break;
            case "1x2":
                echo " equals 1x2";
                $selected = $radio_value;
                break;
            case "1x3":
                echo " equals 1x3";
                $selected = $radio_value;
                break;
            case "2x1":
                echo " equals 2x1";
                $selected = $radio_value;
                break;
            case "2x2":
                echo " equals 2x2";
                $selected = $radio_value;
                break;
            case "2x3":
                echo " equals 2x3";
                $selected = $radio_value;
                break;
            case "3x1":
                echo " equals 3x1";
                $selected = $radio_value;
                break;
            case "3x2":
                echo " equals 3x2";
                $selected = $radio_value;
                break;
            case "3x3":
                echo " equals 3x3";
                $selected = $radio_value;
                break;
        }

        $takenValues = array();
        $file = fopen("taken.txt","r");

        while(!feof($file))
        {
            array_push($takenValues,fgets($file));
        }

        fclose($file);

        $dataSize = sizeof($takenValues);
        echo(" ".$dataSize." ");
        $taken = 0;

        if($dataSize>0){
            if(in_array($selected, $takenValues)){
                echo("taken");
                $taken = 1;
            }
        }

        if($taken == 0)
        {
            $f=fopen("WebState.txt", "w");
            fwrite($f, $selected);
            fclose($f);
            $f=fopen("taken.txt", "a");
            fwrite($f, $selected."\n");
            fclose($f);            
        }else{echo("Location taken");}
    }
?>
<form method="post" action="">
    <input type="radio" name="radio" id="1x1" value="1x1"/>
    <input type="radio" name="radio" id="1x2" value="1x2"/>
    <input type="radio" name="radio" id="1x3" value="1x3"/>
    <br />
    <input type="radio" name="radio" id="2x1" value="2x1"/>
    <input type="radio" name="radio" id="2x2" value="2x2"/>
    <input type="radio" name="radio" id="2x3" value="2x3"/>
    <br />
    <input type="radio" name="radio" id="3x1" value="3x1"/>
    <input type="radio" name="radio" id="3x2" value="3x2"/>
    <input type="radio" name="radio" id="3x3" value="3x3"/>
    <br />
    <input type="submit" name="submit" value="submit"/>
</form>
<section id="gameState">
    <a>Game state</a>
    <pre></pre>
</section>
<script>
    var poemDisplay = document.querySelector("pre");

    function updateDisplay() {
    var url = "location.txt";
    fetch(url).then(function(response) {
        response.text().then(function(text) {
        poemDisplay.textContent = text;
        });
    });
    }
    setInterval(updateDisplay, 500);
</script>