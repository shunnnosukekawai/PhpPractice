<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input = (int)trim(fgets(STDIN));
    $a = array();
    for($i = 0; $i < $input; $i++){
            $a[$i] = trim(fgets(STDIN));
    }
      echo "Hello"  . " " ;
for($i =0;$i < $input; $i++ ){
    echo $a[$i] ;
if(next($a)){
    echo "," ;
}
}
echo ".";
    ?>
