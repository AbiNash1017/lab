<?php
$num=121;
$rev=0;
$temp=$num;
while($num>1){
    $r=$num%10;
    $rev=$rev*10+$r;
    $num=$num/10;
}
if ($rev==$temp){
 echo"the given number is palindrome";   
}else{
    echo"the given number is not palindrome";
}
?>