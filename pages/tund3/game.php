<?php
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
            $f=fopen("WebState.txt", "w");
            fwrite($f, $selected);
            fclose($f);
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