<?php
      function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"),'',$spaceline);
    }
    $first = foo(fgets(STDIN));
    $second = foo(fgets(STDIN));
    $third = foo (fgets(STDIN));
    if($first=$second=$third){
        echo "YES";
    }else{
        echo "NO";
    }
?>
