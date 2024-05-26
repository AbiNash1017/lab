<?php
$host="localhost";
$user="root";
$pass="";
$dbname="MFGC";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
die('coud not connect:'.mysql_connect_error());
}
echo'connected sucessfully<br/>';

$sql="CREATE TABLE student (Admission_Number INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL, Course VARCHAR(20) not null,Gender VARCHAR(10) not null,ph_number varchar(20),E_mail varchar(20), Address varchar(40),PRIMARY KEY(Admission_Number))";

if(mysqli_query($conn, $sql)){
    echo"Table student created successfully<br/>";
}else{
    echo"Could not create table: ".mysqli_error($conn);
}

mysqli_close($conn);
?>
