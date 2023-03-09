<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form method="post" action="process.php" enctype="multipart/form-data">
		<label>Name:</label>
		<input type="text" name="name"><br><br>
		<label>Email:</label>
		<input type="email" name="email"><br><br>
		<label>Password:</label>
		<input type="password" name="password"><br><br>
		<label>Profile Picture:</label>
		<input type="file" name="profile_pic"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>

