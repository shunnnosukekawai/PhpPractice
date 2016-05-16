<?php
    function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"),'',$spaceline);
    }
        $min = foo(fgets(STDIN));
        $max = foo(fgets(STDIN));
        echo ceil($max/$min);

?>
