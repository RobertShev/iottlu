<?php
    $gamerMode = $_GET["gamer"];

    if($gamerMode == "A"){$gamer= 1; echo "Player A\n";} 
    else if($gamerMode == "B"){$gamer= 2; echo "Player B\n";} 
    else 
    {
        $message = "wrong gamer definition";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    if(isset($_POST['restore'])){
        $restoringFile = fopen("location.txt", "w");
        fwrite($restoringFile, "000000000");
        fclose($restoringFile);
    }

    echo("Game started");
    if(isset($_POST['submit']))
    {
        $radio_value = $_POST["radio"];
        switch ($radio_value) {
            case "0":
                echo " equals 1x1";
                $selected = $radio_value;
                break;
            case "1":
                echo " equals 1x2";
                $selected = $radio_value;
                break;
            case "2":
                echo " equals 1x3";
                $selected = $radio_value;
                break;
            case "3":
                echo " equals 2x1";
                $selected = $radio_value;
                break;
            case "4":
                echo " equals 2x2";
                $selected = $radio_value;
                break;
            case "5":
                echo " equals 2x3";
                $selected = $radio_value;
                break;
            case "6":
                echo " equals 3x1";
                $selected = $radio_value;
                break;
            case "7":
                echo " equals 3x2";
                $selected = $radio_value;
                break;
            case "8":
                echo " equals 3x3";
                $selected = $radio_value;
                break;
        }
        
        $file = file_get_contents("location.txt");//str
        $locations = str_split($file,1);//arr
        if($locations[$selected]==0)
        {
            $oldLocations = fopen("location.txt", "w");
            $locations[$selected]=$gamer;
            
            $newLocation = implode("", $locations); //To-DO chech why gets last part not whole string
            
            fwrite($oldLocations, $newLocation);
            fclose($oldLocations);
            
        }
    }
?>
<form method="post" action="">
    <input type="radio" name="radio" id="0" value="0"/>
    <input type="radio" name="radio" id="1" value="1"/>
    <input type="radio" name="radio" id="2" value="2"/>
    <br />
    <input type="radio" name="radio" id="3" value="3"/>
    <input type="radio" name="radio" id="4" value="4"/>
    <input type="radio" name="radio" id="5" value="5"/>
    <br />
    <input type="radio" name="radio" id="6" value="6"/>
    <input type="radio" name="radio" id="7" value="7"/>
    <input type="radio" name="radio" id="8" value="8"/>
    <br />
    <input type="submit" name="submit" value="submit"/>
</form>
<form method="post" action="">
    <input type="submit" name="restore" value="restore"/>
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