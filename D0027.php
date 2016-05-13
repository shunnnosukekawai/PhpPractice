<?php
   function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
    $a =foo(fgets(STDIN));
    $cnt=0;
    for($i=1;$i<=$a;$i++){
        $cnt+=$i;
    }
    echo $cnt;
?>
