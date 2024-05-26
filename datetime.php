<?php
echo"todays date in various format:"."</br>";
echo"todays".date("y/m/d")."</br>";
echo"todays".date("y.m.d")."</br>";
echo"todays".date("y-m-d")."</br>";
echo"todays".date("1")."</br>";
date_default_timezone_set('Asia/Calcutta')."</br>";
echo "The time is " . date("h:i:sa"). "<br>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);
while ($startdate < $enddate)
{
echo date("M d", $startdate) . "<br>";
$startdate = strtotime("+1 week", $startdate);
}
?>