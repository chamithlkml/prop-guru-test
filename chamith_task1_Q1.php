<?php

$arguments = $argv;
array_shift($arguments); //Remove first element as it is the name of the script

$start = intval($arguments[0]);
$end = intval($arguments[1]);

if($start < $end){
    
    for($i=$start;$i<=$end;$i++){
        
        if($i%3 == 0 || $i%5 == 0){
            if($i%3 == 0){
                echo "Fizz";
            }
            if($i%5 == 0){
                echo "Buzz";
            }
            
        }else{
            echo $i;
        }
        
        echo " ";
    }
    
    echo PHP_EOL;
    
}else{
    echo 'end value must be greater than starting value.'; 
    exit;
}
