<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="background: yellow;">
			
		</div>
		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
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
		</div>
</body>
</html>