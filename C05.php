<?php
function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
    $number = foo(fgets(STDIN));
    for($i=0;$i<$number;$i++){
        $ip[$i] = explode(".",foo(fgets(STDIN)));

    }
    for($i=0;$i<$number;$i++){
         $answer= "True";
         for($j=0;$j<4;$j++){
             if(count($ip[$i])!=4){
                 $answer ="False";
             }elseif(0>$ip[$i][$j] || $ip[$i][$j]>100){
                 $answer="False";
             }
         }

    echo $answer;
    if($i!=$number-1){
        echo "\n";
    }
    }
?>
