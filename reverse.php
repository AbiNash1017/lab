<?php
$num=123;
$rev=0;
$sum=0;
$temp=$num;
while ($num > 1) {
    $r=$num%10;
    $sum=$sum+$r;
    $rev=$rev*10+$r;
    $num=$num/10;
}
echo"the reverse of the given number is $rev</br>";
echo"the sum of its number is $sum";
?>