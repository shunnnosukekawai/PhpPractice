<?php
$box1 = trim(fgets(STDIN));

$pass = explode(" ", $box1);

if ($pass[0] > $pass[1]) {
echo $pass[0];
} elseif ($pass[0] < $pass[1]) {
echo $pass[1];
} elseif ($pass[0] == $pass[1]) {
echo "eq";
}
