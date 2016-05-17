<?php
      function foo($spaceline){
    return $spaceline = str_ireplace(array("\r\n","\n","\r"),'',$spaceline);
    }
   $kouji =explode(" ",foo(fgets(STDIN)));
   $number = foo(fgets(STDIN));
   for($i=0;$i<$number;$i++){
       $leaf[$i] =explode(" ",foo(fgets(STDIN)));
       if  (($leaf[$i][0]-$kouji[0])**2+($leaf[$i][1]-$kouji[1])**2=>$kouji[2]**2)
           echo "noisy";
       }else{
           echo "silent";
       }
   }

?>
