<html>
<head>
<title>12 Program </title>
</head>
<body>
<form action="primeornot.php" method="POST">
<table align="center" border="1px">
<tr>
<td colspan="2" align="center">Check Prime</td>
</tr>
<tr>
<td>Enter Number</td>
<td><input type="text" name="Number"></td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" value="submit" name="submit">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$flag=0;
$num=$_POST['Number'];
for($i=2;$i<$num;$i++)
{
if($num % $i == 0)
{
$flag=1;
break;
}
}
if($flag==1)
{
echo "The Given Number is not Prime";
}
else
{
echo "The Given Number is Prime";
}
}
?>