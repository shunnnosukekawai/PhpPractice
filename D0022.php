<?php
  function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
    $a = foo(fgets(STDIN));
    echo 6*$a*$a;
?>
