<?php
  function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
$a =foo(fgets(STDIN));
if($a<10){
    echo "0" . "0" . $a;}
    elseif($a<100){
        echo "0" . $a;
    }else{
        echo $a;
    }






?>
