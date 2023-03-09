<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<!-- Adding Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Registration Form</h2>
		<form method="post" action="process.php" enctype="multipart/form-data">
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label>Profile Picture:</label>
				<input type="file" name="profile_pic" class="form-control-file">
			</div>
			<input type="submit" value="Submit" class="btn btn-primary">
		</form>
	</div>
	<!-- Adding Bootstrap JS -->
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


