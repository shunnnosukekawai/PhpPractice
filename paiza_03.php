<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input =  trim(fgets(STDIN));
    for($i=1; $i<10; $i++){
        if($i<9){
echo $input*$i . ' ';
} else
echo  $input*$i;

    }

?>
