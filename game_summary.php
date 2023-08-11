<?php

function gameSummary(){

    global $play_count,$correct_guesses,$guess_high,$guess_low;
    
    nl(1,2);
    echo "correct guesses: $correct_guesses";
    nl(1,2);
    echo "low guesses: $guess_low";
    nl(1,2);
    echo " high guesses: $guess_high";
    nl(1,3);
    $correctPercentage = round(($correct_guesses/$play_count)*100);
    $lowPercentage = round(($guess_low/$play_count)*100);
    $highPercentage = round(($guess_high/$play_count)*100);
    nl(1,1,TRUE);
    echo " Your percent correct was $correctPercentage %. 
    \nYour percent low was $lowPercentage.
    \nYour percent high was $highPercentage";
    nl();
    $fate = $correctPercentage > 50 ? "You got more than half correct. You don't have to die!" : "You will surely die :(";
    
    echo $fate;
    echo "\n";
}
