<?php
    $player1 = htmlspecialchars($_GET["player1"]);
    $player2 = htmlspecialchars($_GET["player2"]);   
    $players = fopen("players.txt","w");
    $mode = fopen("mode.txt", "w");
    $gameMode = "";

    if($player1='1' && $player2='1'){
        startGame("LvsL");
    }else if($player1='1' || $player2='1'){
        startGame("LvsO");
    }else{
        startGame("OvsO");
    }
    
    function startGame($gameMode){
        
        fwrite($mode, $gameMode);
        fclose($mode);
        
        $game=1;
        $playerOneResponse=0;
        $playerTwoResponse=1;

        while($game==1){
            if($playerTwoResponse==1){
                while($playerOneResponse==0){
                    $playerOneResponse=askResponse(1);
                }
            }
            if($playerOneResponse==1){
                while($playerTwoResponse==0){
                    $playerTwoResponse=askResponse(2);
                }
            }
            $game=decideWinner();

        }
    }

    function askResponse($player){
        switch ($player){
            case 1:
                $responseOne = htmlspecialchars($_GET["location"]);
                if(checkLocation($responseOne)==1){
                    if(saveResponse($responseOne)==1){
                        return 1;
                    }
                }
            case 2:
                $responseTwo = htmlspecialchars($_GET["location"]);
                if(checkLocation($responseTwo)==1){
                    if(saveResponse($responseTwo)==1){
                        return 1;
                    }
                }
        }
    }

    function checkLocation($location){
    /*
        TO-DO:
        * controll logic one more time, develop for location.txt as 012112020;
        * where 0 untaken, 1 taken by first player , 2 taken by second player;
        * each number place represents location from 0 to 8 (9 locations);
    */ 
        $dataSize = sizeof($data);
        $taken = 0;
        $file = fopen("taken.txt","r");
        
        while(!feof($file))
        {
            array_push($data,fgets($file));
        }
        fclose($file);
      
        if($dataSize>0){
            for($i=0; $i<$dataSize; $i++){
                if($data[$i] == $location){
                    $taken = 1;
                }
            }
        }

        if($taken == 0){
            return 1;
        }
       
    }

    function saveResponse($location){
        return 1;
    }
    //create better function name, instead of decideWinner
    function decideWinner(){
        return 1;
    }
?>
