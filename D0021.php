<?php
    function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"),'',$spaceline);
    }
        $a = foo(fgets(STDIN),fgets(STDIN));
        if($a[0]=$a[1]){
            echo "Yes";
        }else{
            echo "No";
        }

?>
