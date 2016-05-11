<?php
function hoge( $a = "Hello"){
  $a .= ", World\n";
  return $a;
}

echo hoge();

?>
