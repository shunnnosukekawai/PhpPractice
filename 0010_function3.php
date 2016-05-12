<?php
function hoge( $a = "Hello", $b){
  $a .= ", World\n";
  return $a . $b;
}

echo hoge($b =>'kawai');

?>
