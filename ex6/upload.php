<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>
 
<form action="upload.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
 
 
</form>
<?php
error_reporting(1);
if(isset($_POST['Submit1']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];
 
if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$_FILES["file"]["name"]." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 
?>
 
</body>
</html>