<?php
  function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
    $a = array(fgets(STDIN),fgets(STDIN));
    $a = foo($a);
    echo 180-($a[0]+$a[1]);
?>
