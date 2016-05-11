<?php
$a[0][0] ='AA';
$a[0][1] ='AB';
$a[1][0] ='BA';
$a[1][1] ='BB';
$a[2][0] ='CA';
$a[2][1] ='CB';
$a[2][2] ='CC';


$A = array(
0 => array(
    0=> 'AAA',
    1=> 'BBB',
),

1=> array(
    0 =>'CCC'
)

);
var_dump($a);
echo  "<br>";
var_dump($A);
echo  "<br>";
foreach($a as $key1 => $value1){
    foreach($value1 as $key2 =>$value2){
        echo $key1;
        echo $key2;
        echo $value2 . "<br>";



    }


}
foreach($A as $key1 => $value1){
    foreach($value1 as $key2 =>$value2){
        echo $key1;
        echo $key2;
        echo $value2 . "<br>";



    }


}

?>
