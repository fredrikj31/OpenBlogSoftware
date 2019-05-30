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
		<h2>Now setting up the blog setting.</h2>
		<h4><i>These setting can always be edited when installed.</i></h4>
		<br>
		<br>
		<div class="row">
			<div class="col"></div>
			<div class="col">
				<form action="connect-database.php" method="POST" class="needs-validation" novalidate>
					<div class="form-group">
						<label>Blog Name:</label>
						<input type="text" class="form-control" name="BlogName" placeholder="Beauty Blog" required>
						<div class="invalid-feedback">
							You must fill out the blog name.
						</div>
					</div>
					<div class="form-group">
						<label>Blog Author:</label>
						<input type="text" class="form-control" name="BlogAuthor" placeholder="John Doe" required>
						<div class="invalid-feedback">
							You must fill out the blog author.
						</div>
					</div>
					<div class="form-group">
						<label>Blog Language:</label>
						<input type="text" class="form-control" name="BlogLanguage" placeholder="English" required>
						<div class="invalid-feedback">
							You must fill out the blog language.
						</div>
					</div>
					<div class="form-group">
						<label>Blog Topic:</label>
						<input type="text" class="form-control" name="BlogTopic" placeholder="Lifestyle" required>
						<div class="invalid-feedback">
							You must fill out the blog topic.
						</div>
					</div>
					<button type="submit" class="btn btn-info">Next</button>
					<br>
					<br>
				</form>
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