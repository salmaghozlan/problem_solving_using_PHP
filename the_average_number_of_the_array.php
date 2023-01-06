<?php 

$mylist = array(-1 , 5 , 6 , 2 , -3);

$sum = 0 ; 
$size = sizeof($mylist);

for ($i = 0 ; $i<sizeof($mylist); $i++){
   $sum += $mylist[$i] ;  
 }
$avg = $sum/$size ; 
echo $avg  ; 

?>
