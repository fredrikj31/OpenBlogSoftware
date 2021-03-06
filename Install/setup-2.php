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
	
	<!-- Custom Javascript -->
	<script>
		function checkConn() {
			var DBAddress = document.getElementById('DBAddress').value;
			var DBUser = document.getElementById('DBUser').value;
			var DBPass = document.getElementById('DBPass').value;
			var DBName = document.getElementById('DBName').value;
			
			/* Creating Ajax Request */
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('ConnRespons').innerHTML = this.responseText;
				}
			}
			xmlHttp.open("GET", "test-database.php?Address=" + DBAddress + "&User=" + DBUser + "&Pass=" + DBPass + "&Name=" + DBName, true);
			xmlHttp.send();
		}
	</script>
</head>

<body>

	<br>
	<div class="container text-center">
		<h2>Second you need to setup your database details</h2>
		<br>
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<form action="connect-database.php" method="POST" class="needs-validation" novalidate>
					<div class="form-group">
						<label>Server Address:</label>
						<input type="text" class="form-control" id="DBAddress" name="DBAddress" placeholder="127.0.0.1" required>
						<div class="invalid-feedback">
							You must fill out the database address.
						</div>
					</div>
					<div class="form-group">
						<label>User:</label>
						<input type="text" class="form-control" id="DBUser" name="DBUser" placeholder="Root" required>
						<div class="invalid-feedback">
							You must fill out the database user.
						</div>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" class="form-control" id="DBPass" name="DBPass" placeholder="Password123" required><i>Press space for blank/no password</i>
						<div class="invalid-feedback">
							You must fill out the database password.
						</div>
					</div>
					<div class="form-group">
						<label>Database Name:</label>
						<input type="text" class="form-control" id="DBName" name="DBName" placeholder="Database Name" required>
						<div class="invalid-feedback">
							You must fill out the database name.
						</div>
					</div>
					<button type="submit" class="btn btn-info">Next</button>
					<br>
					<br>
				</form>
				<p><span id="ConnRespons"></span></p>
				<button class="btn btn-success" onclick="checkConn()">Check Connection</button>
			</div>
			<div class="col"></div>
		</div>
	</div>

	<!-- Bootstrap Form Validation -->
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function () {
			'use strict';
			window.addEventListener('load', function () {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function (form) {
					form.addEventListener('submit', function (event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>