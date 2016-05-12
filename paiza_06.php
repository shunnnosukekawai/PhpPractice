<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $a = explode(" ",fgets(STDIN));
    if($a[1]="Km"){
        echo $a[0]*1000000;
    }elseif($a[1]="m"){
            echo $a[0]*1000;
    }elseif($a[1]="cm"){
        echo $a[0]*10;
    }


?>
