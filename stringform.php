<html>
<head>
<title>String as input Form</title>
<style>
th
{
background-color:black;
color:white;
}
</style>
</head>
<body>
<form method="post" action="stringform.php">
<table border="1" align="center">
<tr>
<th colspan="2">String as Input </th>
</tr>
<tr>
<td>Name:
</td>
<td>
<input type="text" name="Name" placeholder="Enter Your Name" >
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" value="Submit" name="Submit">
</td>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
    $name = $_POST['Name'];
echo "<script>alert(' Your Name is $name')</script>";
}
?>