<?php
    function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"),'',$spaceline);
    }
    $a = explode(" ",fgets(STDIN));
   $a =foo ($a);
   echo $a[0] . "/" . $a[1] . "/" . $a[2];

?>
