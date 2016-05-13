<?php
function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }

    $a = fgets(STDIN);
    $a = foo($a);
    for($i=0;$i<$a;$i++){
        echo "*";
    }

?>
