<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Open Blog Software - Install</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!-- Custom Icons -->
	<link rel="stylesheet" href="css/icons.css" />
</head>
<body>
	<div class="container text-center">
		<h2>Create the database file. And setting up the database connection.</h2>
		<br>
		<?php

			//Getting the database details from the setup page
			$DBAddress = $_POST['DBAddress'];
			$DBUser = $_POST['DBUser'];
			$DBPass = $_POST['DBPass'];
			$DBName = $_POST['DBName'];

			if (empty($DBPass) || $DBPass == " ") {
				$DBPass = "";
			}

			if(!is_writable("../includes/db.php")) {
				print("Could not write to the file.");
				print('<br>');
				print('<textarea rows="4" cols="50">
				<?php 
					$conn = mysqli_connect("'.$DBAddress.'", "'.$DBUser.'", "'.$DBPass.'", "'.$DBName.'")
				?>
				</textarea>');
			} else {
				$fp = fopen('../includes/db.php', 'wb');
				fwrite($fp, $connect_code);
				fclose($fp);
				chmod('../includes/db.php', 0666);
				print("Successfully created the file.");
			}

		?>
	</div>
	<br>
	<br>
	<button class="btn btn-info" onclick="location.href = 'setup-3.php';">Next</button>
</body>
</html>