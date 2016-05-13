<?php
   function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
    $a = foo(fgets(STDIN));
    if($a<10){
        echo "1";
    }
    elseif($a<100){
        echo "2";
    }elseif($a<1000){
        echo "3";
    }elseif($a<10000){
        echo "4";
    }else{
        echo "5";
    }
?>
