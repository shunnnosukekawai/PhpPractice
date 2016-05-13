<?php
function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"," ",),'',$spaceline);
    }
        $a = fgets(STDIN);
        if($a<0){
            echo $a*-1;
        }else{
        echo $a;
        }
?>
