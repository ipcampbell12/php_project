<?php

function nl($num=1,$sec=1,$clear=FALSE){
    for($i = 0; $i < $num; $i++){
      echo "\n";
    //   echo "...";
      echo "\n";
      sleep($sec);
      if($clear){
        system("clear");}
    }
  }