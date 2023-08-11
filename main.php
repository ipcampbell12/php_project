<?php


require_once 'guess_number.php';
require_once 'new_line.php';
require_once 'keep_playing.php';
require_once 'game_summary.php';


$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;
$opening = "Welcome to the NUMBER GAME! Your fate depends on the correctness of your answer";



while(TRUE){
    $start = keepPlaying("play the game",$opening);
    if($start === 'y'){
        nl(1,1,TRUE);
        echo "In this game, you will try to guess a number between 1 and 10.\n";
        nl();
        echo "If you are correct, honor and glory.\n";
        nl();
        echo "If you are wrong, certain death. \n";
        nl();
        echo "Whatever you do, DON'T GUESS THE WRONG NUMBER!\n";
        nl();
        
        $still = keepPlaying("still want to play");

        if($still === 'y'){
            nl(1,1,TRUE);
            $rounds = 2;
            for($x=0; $x<$rounds; $x++){
                guessNumber();
                echo "\n";
                
                if($x === ($rounds-1)){
                    break;
                } 
                $selection = keepPlaying("keep playing");
                if($selection === "y"){
                    nl(1,1,TRUE);
                    continue;
                }else{
                    echo "Good bye, weakling.";
                    break;
                }
            }
            
            echo "The game has ended . . .";
            nl();
            echo "Let's see how you did . . .";
            nl(1,1,3);
            gameSummary();
        
            $selection = keepPlaying("play another game");
            nl();
            if($selection === 'y'){
                continue;
            } else{
                echo "Good bye, weakling.";
                nl(1,1,TRUE);
                break;
            }
        }else{
            echo "Good bye, weakling.";
            nl(1,1,TRUE);
            break;
        }
    
    } else{
        echo "You didn't even want to play? So weak . . .";
        nl(1,1,TRUE);
        break;
    }

}