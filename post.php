<html>
<head>
<title>13 Program </title>
</head>
<body>
<form action="post.php" method="POST">
<table align="center" border="1px">
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
<td>
</td>
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
if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$pass=$_POST['pass'];
echo "Your Name is $name </br>";
echo "Your Password is $pass</br>";
}
?>