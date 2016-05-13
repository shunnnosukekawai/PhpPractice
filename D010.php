<?php
    function foo($unitofDistance){
    return $unitofDinstance = str_ireplace(array("\r\n", "\r", "\n"),'',$unitofDistance);
    }
    $a = array(fgets(STDIN),fgets(STDIN));
    $b = foo($a[0]);
    $c = foo($a[1]);
    echo $b . "@" . $c;
?>
