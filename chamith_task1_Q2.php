<?php

$arguments = $argv;
array_shift($arguments); //Remove first element as it is the name of the script

$start = intval($arguments[0]);
$end = intval($arguments[1]);
$fizz_buzz = false;

if($start < $end){
    
    for($i=$start;$i<=$end;$i++){
        
        if($i%3 == 0 || $i%5 == 0){
            
            if($i%3 == 0){
                echo "Fizz";
                $fizz_buzz = true;
            }
            
            if($i%5 == 0){
                echo "Buzz";
                $fizz_buzz = true;
            }
            
        }else{
            
            if($fizz_buzz){
                echo "Bazz";
                $fizz_buzz = false;
            }else{
                echo $i;
            }
        }
        
        echo " ";
    }
    
    echo PHP_EOL;
    
}else{
    echo 'end value must be greater than starting value.'; 
    exit;
}
