<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
	<!-- Adding Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>User Information</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Profile Picture</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if (($handle = fopen("users.csv", "r")) !== FALSE) {
					while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
						echo "<tr>";
						echo "<td>" . $data[0] . "</td>";
						echo "<td>" . $data[1] . "</td>";
						echo "<td><img src='" . $data[2] . "' height='100'></td>";
						echo "</tr>";
					}
					fclose($handle);
				}
				?>
			</tbody>
		</table>
		<?php
		if(isset($_COOKIE["username"])) {
			echo "<p>Welcome, " . $_COOKIE["username"] . "!</p>";
		}
		?>
	</div>
	<!-- Adding Bootstrap JS -->
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
