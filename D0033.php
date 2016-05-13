<?php
   function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"),'',$spaceline);
    }
    $a =explode(" ", foo(fgets(STDIN)));
    echo $a[0][0] . "." . $a[1][0];
?>
