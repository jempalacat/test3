<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My First Ubuntu Server PHP Deployment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<div class="container my-5">
		<h1 class="text-center">My First Ubuntu Server PHP Deployment</h1>

		<form action="submit.php" method="POST">
			<div class="mb-3">
				<label for="firstname" class="form-label">First Name:</label>
				<input type="text" name="firstname" class="form-control" id="firstname" required>
			</div>

			<div class="mb-3">
				<label for="middlename" class="form-label">Middle Name:</label>	
				<input type="text" name="middlename" class="form-control" id="middlename">
			</div>

			<div class="mb-3">
				<label for="lastname" class="form-label">Last Name:</label>
				<input type="text" name="lastname" class="form-control" id="lastname" required>
			</div>

			<div class="mb-3">
				<label for="age" class="form-label">Age:</label>
				<input type="number" name="age" class="form-control" id="age" required>
			</div>

			<div class="mb-3">
				<label for="address" class="form-label">Address:</label>
				<input type="text" name="address" class="form-control" id="address" required>
			</div>

			<div class="mb-3">
				<label for="course" class="form-label">Course & Section:</label>
				<input type="text" name="coursec" class="form-control" id="course" required>
			</div>

			<div class="text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
