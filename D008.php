<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    function foo($unitofDistance){
    $unitofDinstance = str_ireplace(array("\r\n", "\r", "\n"),'',$unitofDistance);

    }
        $a = explode(" ",fgets(STDIN));
        if(foo($a[0])/2==0){
            echo "odd";
        }else {
            echo "even";
