<?php
require_once "new_line.php";

function guessNumber(){
    global $play_count,$correct_guesses,$guess_high,$guess_low;

    $play_count++;
  
    // $rand_num = rand(1,10);
    $rand_num = 5;

    $answer = readline("Enter your number . . .  ");
    $int_answer = intval($answer);
    nl(1,1,TRUE);
    
    switch($int_answer){
      case($int_answer === $rand_num):
        $correct_guesses++;
        echo "You got it right!";
        break;
      case($int_answer < $rand_num):
        $guess_low++;
        echo "Your answer was too low.";
        break;
      case($int_answer > $rand_num):
        $guess_high++;
        echo "Your answer was too high.";
        break;
      case(gettype())
    }

    nl();
    echo "You are currently on round $play_count. \nThe random number was $rand_num. \nYour guess was $int_answer \n You have guess correclty $correct_guesses times";
    nl();
  }


  //guessNumber(0,0,0,0);






