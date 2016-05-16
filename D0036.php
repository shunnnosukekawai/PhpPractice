<?php
    function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"),'',$spaceline);
    }
    $abc =foo(fgets(STDIN));
   echo str_ireplace('at','@',$abc);
?>
