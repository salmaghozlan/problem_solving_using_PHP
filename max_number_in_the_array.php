<?php 

$mylist = array(-1 , 5 , 6 , 2 , -3);

// the max number in the list

if (empty($mylist)) {
    // The array is empty, so there is no maximum element.
    echo "The array is empty";
    exit;
}

$max = $mylist[0]; // Set the initial value of $max to the first element in the array in case there is just one element in the array.

for($j=1 ; $j<sizeof($mylist) ; $j++){   
    if($max < $mylist[$j]){
        $max = $mylist[$j];
    }
    
}
echo $max;

?>
