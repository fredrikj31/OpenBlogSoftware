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

	<br>
	<div class="text-center">
		<h2>Welcome to the install of your new blog!</h2>
		<br>
		<br>
		<h4>First of all we need to see if you fill the system requirements</h4>
		<br>
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<table class="table">
					<thead>
						<tr>
							<th>Feature:</th>
							<th>Required:</th>
							<th>Your system:</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><p>PHP Version:</p></td>
							<td><p>Version 5 or above</p></td>
							<td>
							<?php
								//Testing if php version is above 
								$PHP_Version = phpversion();

								if ($PHP_Version >= 5) {
									print('<p class="text-success"><i class="fas fa-check"></i> Your PHP version: ' . $PHP_Version . '</p>');
								} else {
									print('<p class="text-danger"><i class="fas fa-times"></i> Your PHP version: ' . $PHP_Version . '</p>');
								}
							?>
							</td>
						</tr>
						<tr>
							<td><p>PHP Sessions:</p></td>
							<td><p>Enabled</p></td>
							<td>
							<?php
								$_SESSION['testing_sessions'] = 1;

								if (empty($_SESSION['testing_sessions'])) {
									print('<p class="text-danger"><i class="fas fa-times"></i> Sessions Status: Disabled.</p>');
								} else {
									print('<p class="text-success"><i class="fas fa-check"></i> Sessions Status: Enabled.</p>');
								}
							?>
							</td>
						</tr>
						<tr>
							<td><p>PHP Safemode:</p></td>
							<td><p>Disabled</p></td>
							<td>
							<?php
								if (ini_get("safe_mode")) {
									print('<p class="text-danger"><i class="fas fa-times"></i> Safemode Status: Enabled.</p>');
								} else {
									print('<p class="text-success"><i class="fas fa-check"></i> Safemode Status: Disabled.</p>');
								}
							?>
							</td>
						</tr>
					</tbody>
				</table>

				<button class="btn btn-info" onclick="location.href = 'index3.html';">Next</button>
			</div>
			<div class="col"></div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>