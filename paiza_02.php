<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input = fgets(STDIN);
    $a = explode(" " , $input);
    foreach($a as $key => $value){
            if($a[0]= $key){
                echo $value . ".";
            } else{
            echo "Hello" . $value . ",";
            }

    }


?>
