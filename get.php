<html>
<head>
<title>12 Program </title>
</head>
<body>
<form action="get.php" method="GET">
<table border="1px" align="center">
<tr>
<td colspan="2" align="center"> Login Page</td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="Name"></td>
</tr>
<tr>
<td>Passowrd</td>
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="submit">
<input type="reset" value="reset">
</td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_GET['submit']))
{
$name=$_GET['Name'];
$pass=$_GET['pass'];
echo "Your Name is $name </br>";
echo "Your Password is $pass</br>";
}
?>