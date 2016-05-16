<?php
      function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"),'',$spaceline);
    }
    $b =0;
    for($i=0;$i<7;$i++){
    $a[$i] = foo(fgets(STDIN));
    if($a[$i]<=30){
        $b =$b+1;
    }
    }
    echo $b;
?>
