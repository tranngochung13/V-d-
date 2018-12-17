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
		<div class="row">
					<legend style="text-align: center;">Registration Form</legend>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: right; margin-top: 28px;">
				<p>Tên file</p>
				<p>Full Name</p>
				<p>Email</p>
				<p>Password</p>
				<p>Date of birth</p>
				<p>Country</p>
				<p>Gender</p>
				<p>Meal</p>
				<p>Preference</p>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<form action="registration.php" method="POST" role="form-group">
				
					<div class="form-group">
						<input type="text" class="form-control" id="ten_file" name="ten_file" placeholder="Input file" value="<?php echo $_POST["ten_file"];?>"></br>
						<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Input Full Name" value=""></br>
						<input type="text" class="form-control" id="Email" name="Email" placeholder="Input Email" value=""></br>
						<input type="password" class="form-control" id="Password" name="Password" placeholder="Input Password" value=""></br>
						<input type="Date" class="form-control" id="DOB" name="DOB"></br>
						<input type="text" class="form-control" id="Country" name="Country" placeholder="Input Country" value=""></br>
						<div class="radio">
							<label>
								<input type="radio" name="Gender" id="Gender" value="Male" checked="checked">
								Male
							</label>
							<label>
								<input type="radio" name="Gender" id="Gender" value="Female" checked="checked">
								Female
							</label>
							<label>
								<input type="radio" name="Gender" id="Gender" value="Unknown" checked="checked">
								Unknown
							</label>
						</div></br>
						<div class="checkbox" name="Meal" id="Meal">
							<label>
								<input type="checkbox" value="Low calorie" name="Meal" id="Meal">
								Low calorie
							</label>
						</div>
						<div class="checkbox" name="Preference" id="Preference">
							<label>
								<input type="checkbox" value="Low salt" name="Preference" id="Preference">
								Low salt
							</label>
						</div></br>
						<div class="checkbox" name="accept" id="accept">
							<label>
								<input type="checkbox" value="" name="accept" id="accept">
								I accept <a href="">terms</a>
							</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Ghi và đọc file</button>
				</form>
				<?php 


					error_reporting(1);
					if (isset($_POST["ten_file"]) && isset($_POST["full_name"])) {
						$ten_file = $_POST["ten_file"];
						$full_name = $_POST["full_name"];
						$Email = $_POST["Email"];
						$Password = $_POST["Password"];
						$DOB = $_POST["DOB"];
						$Country = $_POST["Country"];
						$Gender = $_POST["Gender"];
						$Meal = $_POST["Meal"];
						$Preference = $_POST["Preference"];

						$file = fopen($ten_file, "w",l);
						fwrite($file, "Full name: ".$full_name."/n"."Email: ".$Email."/n"."Password: ".$Password."/n"."Birthday: ".$DOB."/n"."Country: ".$Country."/n"."Gender: ".$Gender."/n"."Meal: ".$Meal."/n"."Preference: ".$Preference);
						echo "<br><p align = 'centrer' class = 'style4'>Đã gửi file thành công</p>";
						fclose($file);

						$file = fopen("$ten_file", "r");
						echo "<table width='500' align='centrer' bgcolor='aqua' class='style4'><tr><td>";
						echo "<b>Nội dung của file:</b><br>";
						while (!feof($file)) {
							$noi_dung = fgets($file, 1000);
							echo "/n".nl2br($noi_dung);
						}
						echo "<br>Đọc file thành công";
						fclose($file);
					}
					else
						echo "<br>Cần nhập đủ tên file và nội dung";
				?>
			</div>
		</div>
	</div>
</body>
</html>