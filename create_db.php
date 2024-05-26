
<?php
$host="localhost";
$user="root";
$pass="";

$conn=mysqli_connect($host,$user,$pass);

if(!$conn){
die('coud not connect:'.mysql_connect_error());
}
echo'connected sucessfully<br/>';

$sql='CREATE Database MFGC';

if(mysqli_query($conn,$sql)){
echo"Database MFGC created sucessfully.";
}
else{
echo"sorry, database creation failed".mysqli_error($conn);
}
mysqli_close($conn);
?>