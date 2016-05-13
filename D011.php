<?php
    function foo($unitofDistance){
    return $unitofDinstance = str_ireplace(array("\r\n", "\r", "\n"," "),'',$unitofDistance);
    }
    $alfaTable = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P"
    ,"Q","R","S","T","U","V","W","X","Y","Z");
    $b = fgets(STDIN);
    $b = foo($b);
    $ans = 0;
    foreach($alfaTable as $keys => $value){
        if($b === $value){
            echo $keys+1;
            break;
        }
    }





?>
