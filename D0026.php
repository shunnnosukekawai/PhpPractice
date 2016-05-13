<?php
   function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
    $a = foo(array(fgets(STDIN),fgets(STDIN),fgets(STDIN),fgets(STDIN),fgets(STDIN),fgets(STDIN),fgets(STDIN)));

    $b=0;
    foreach($a as $key => $value){
        if($value==="no"){
            $b =$b+1;
        }
    }
    echo $b;
?>
