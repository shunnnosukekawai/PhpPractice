<?php

//改行を消す関数です
function killNewLine($str){
    return $str = str_ireplace(array("\r\n", "\r", "\n"),'',$str);
}

$tag = explode(' ',killNewLine(fgets(STDIN)));
//Step1 : 終了タグで分けます
$tagging = explode($tag[1],killNewLine(fgets(STDIN)));

//Step2 : 終了タグが連続で書かれた場合の空の要素以外の要素を受け取ります
$ans[] = '';
$cnt=0;
foreach ($tagging as $key => $value) {
    if($value !== ''){
        $ans[$cnt] = $value;
        $cnt++;
    }
}

//Step3 : 最初の開始とその前の文字列を消して表示
foreach ($ans as $key => $value) {
    $check = substr(strstr($value,$tag[0]),strlen($tag[0]));
    if($check !== ''){
        echo $check . "\n";
    }else{
        echo "<blank>\n";
    }
}

 ?>
