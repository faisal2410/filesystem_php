<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<!-- Adding Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 offset-md-3">
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">OstadCrud</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
			</div>
		
		</div>
		<h2 class="text-center mt-5">Registration Form</h2>
		<div class="row">
			<div class="col-md-6 offset-md-3">
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
  <label for="profile_pic" class="form-label">Profile Picture:</label>
  <div class="input-group">
    <input type="file" class="form-control" id="profile_pic" name="profile_pic" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Choose file</button>
  </div>
</div>
			<input type="submit" value="Submit" class="btn btn-primary">
		</form>
			</div>
	
		</div>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<footer class="bg-dark text-light text-center py-3 mt-5">
	&copy; 2023 OstadCrud.com | All Rights Reserved
</footer>
			</div>
		</div>

		
	</div>

	<!-- Adding Bootstrap JS -->
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>


