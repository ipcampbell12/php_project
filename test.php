<?php


$my_val = 400;
$my_arr = [1,2,3,4,5];

// echo "Here is my value: $my_val";


function changeVal(&$val){
    return $val+= 10;
}

//$new_val = changeVal($my_val);
changeVal($my_val);

//this function takes an argument by reference, so it changed the original value 0f $my_val
echo $my_val;
echo "\n";

function changeValInArr(&$arr,$idx){
    $arr[$idx] += 10;
}   

changeValInArr($my_arr,0);


//original array will stay the same
print_r($my_arr);
echo "\n";
