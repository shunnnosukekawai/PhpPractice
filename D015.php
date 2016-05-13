<?php
function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
    $a = foo(fgets(STDIN));
    for($i=0;$i<$a;$i++){
        echo $a-$i . "\n";
    }
?>
