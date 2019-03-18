<?php
    $player1 = htmlspecialchars($_GET["player1"]);
    $player2 = htmlspecialchars($_GET["player2"]);  

    $winner; 
    $gameMode;
    
    $players = fopen("players.txt","w");
    $mode = fopen("mode.txt", "w");
    

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
            if(decideWinner()!=0){
                $game = 0;
                $winner = decideWinner();
            }

        }
    }

    function askResponse($player){
        switch ($player){
            case 1:
                $responseOne = htmlspecialchars($_GET["location"]);
                if(checkLocation($responseOne)==1){
                    if(saveResponse($responseOne,1)==1){
                        return 1;
                    }
                }
            case 2:
                $responseTwo = htmlspecialchars($_GET["location"]);
                if(checkLocation($responseTwo)==1){
                    if(saveResponse($responseTwo,2)==1){
                        return 1;
                    }
                }
        }
    }

    function checkLocation($location){
    /*
        * where 0 untaken, 1 taken by first player , 2 taken by second player;
        * each number place represents location from 0 to 8 (9 locations);
    */ 
        $file = file_get_contents("location.txt");
        $locations = str_split($file);
        if($locations[$location]==0){
            return 1;
        }else{
            return 0;
        }  
    }

    function saveResponse($location,$player){
        $file = file_get_contents("location.txt");
        substr_replace($file, $player, $location, 0);
        return 1;
    }

    function decideWinner(){
        $file = file_get_contents("location.txt");
        $locations = str_split($file);
        while($locationsAvailable){
            for($i=0; $i<9; $i++){
                if($locations[$i]=0){
                    $locationsAvailable=true;
                    break;
                }else{
                    $locationsAvailable=false;
                    return -1;
                }
            }
            if($locations[0] == $locations[1] && $locations[1] == $locations[2]){
                switch($location[0]){
                    case 1:
                        return 1;
                    case 2:
                        return 2;
                    case 0:
                        return 0;
                }
                
            }else if($locations[3] == $locations[4] && $locations[4] == $locations[5]){
                switch($location[3]){
                    case 1:
                        return 1;
                    case 2:
                        return 2;
                    case 0:
                        return 0;
                }
    
            }else if($locations[6] == $locations[7] && $locations[7] == $locations[8]){
                switch($location[6]){
                    case 1:
                        return 1;
                    case 2:
                        return 2;
                    case 0:
                        return 0;
                }
    
            }else if($locations[0] == $locations[3] && $locations[3] == $locations[6]){
                switch($location[0]){
                    case 1:
                        return 1;
                    case 2:
                        return 2;
                    case 0:
                        return 0;
                }
    
            }else if($locations[1] == $locations[4] && $locations[4] == $locations[7]){
                switch($location[0]){
                    case 1:
                        return 1;
                    case 2:
                        return 2;
                    case 0:
                        return 0;
                }
    
            }else if($locations[2] == $locations[5] && $locations[5] == $locations[8]){
                switch($location[0]){
                    case 1:
                        return 1;
                    case 2:
                        return 2;
                    case 0:
                        return 0;
                }
    
            }else if($locations[0] == $locations[4] && $locations[4] == $locations[8]){
                switch($location[0]){
                    case 1:
                        return 1;
                    case 2:
                        return 2;
                    case 0:
                        return 0;
                }
    
            }else if($locations[2] == $locations[4] && $locations[4] == $locations[6]){
                switch($location[0]){
                    case 1:
                        return 1;
                    case 2:
                        return 2;
                    case 0:
                        return 0;
                }
            }else{return 0;}
        }
        
    }
?>
