
<?php
//改行を消す関数です
function killNewLine($string){
    return $string = str_ireplace(array("\r\n", "\r", "\n"),'',$string);
}
$max = killNewLine(fgets(STDIN));
$iPV4[$max] = 0;
for($i=0;$i<$max;$i++){
    $iPV4[$i] = explode('.',killNewLine(fgets(STDIN)));
}
for($i=0;$i<$max;$i++){
    $flag=true;
    for($j=0;$j<4;$j++){
        if(count($iPV4[$i])!=4){
            $flag=false;
        }
        elseif($iPV4[$i][$j]>255 || $iPV4[$i][$j]<0){
            $flag=false;
        }
    }
    if($flag){
        echo 'True';
    }else{
        echo 'False';
    }
    if($i!=$max-1){
        echo "\n";
    }
}
?>
