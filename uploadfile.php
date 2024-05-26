<?php
if(isset($_FILES['fileToUpload']))
{
$target_path = "D:\about.png";
$target_path = $target_path.basename($_FILES['fileToUpload']['name']);
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_path)){
    echo "File uploaded successfully!";
} else
{
echo "Sorry, file not uploaded, please try again!";
}

}
?>
<html>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="fileToUpload" />
<input type="submit"/>
</form>
</body>
</html>