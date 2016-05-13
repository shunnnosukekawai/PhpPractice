<?php
function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
        $a = explode(" ",fgets(STDIN));
$b= foo($a[0]);
$c =foo($a[1]);
echo (int)($b/$c) . " " . $b%$c;

?>
