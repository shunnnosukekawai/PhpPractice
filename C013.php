<?php
function foo($str){
   return $str = str_ireplace(array("\r\n", "\r", "\n"),'',$str);
}
$dislike1 = foo(fgets(STDIN));
  $hospitalnum = foo(fgets(STDIN));
  $hospital=array();
  for($i=0;$i<$hostpitalnum;$i++){
      $hospital[$i]=foo(fgets(STDIN));


  }

 foreach($hospitalnum as $key){
     $flag=true;
 for($i=0;$i<<strlen($key);$i++){
     if($hospitalnum[$i] ===$dislike){
         $flag=false;
     }
 }
 if($flag){
     echo $hospitalnum . "\n";
 }else

 }

?>
