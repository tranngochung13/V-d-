<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		error_reporting(1);
		$read = fopen('registration.txt', 'r');
		$nd = file_get_contents('registration.txt');
$array = explode("/n",$nd);
foreach ($array as $key => $value) {
 	echo($value)."</br>";
 } 
// explode("</br>",$nd);
?> 
</body>
</html>