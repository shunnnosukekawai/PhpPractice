<?php
    function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"),'',$spaceline);
    }
    $a = foo(fgets(STDIN));
    $b = 21%$a;
    if($b ===0){
        echo $a;
    }else{
        echo $b;
    }

?>
