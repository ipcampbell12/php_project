<?php
// echo "I can finally use PHP!";
// echo "\n";

function keepPlaying($option,$message="..."){
        echo $message;
        nl();
        $response = strtolower(readline("Do you want $option ? (y/n) "));
        
        //echo $response; 
    
        if($response === 'y' || $response === 'yes'){
            return 'y';
        } else{
            echo "\n";
            return 'n';
        }
}


