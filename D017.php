<?php
    function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
    $a = array(fgets(STDIN),fgets(STDIN),fgets(STDIN),fgets(STDIN),fgets(STDIN)
    );
    $a =foo($a);

    sort ($a);
    echo $a[4] . "\n";
    echo $a[0];
?>
