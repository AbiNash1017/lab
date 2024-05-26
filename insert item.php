<?php
$original_array=array(2,3,4,4,5,6,7);
echo"original array:"."</br>";
foreach($original_array as $x){
    echo $x."</br>";
}
$ins_val='9';
$pos='3';
array_splice($original_array,$pos,0,$ins_val);
echo"after inserting 9 in the array is:"."</br>";
foreach($original_array as $x){
    echo $x."</br>";
}
?>