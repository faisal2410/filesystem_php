<!DOCTYPE html>
<html>
<head>
	<title>User Information</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h2>User Information</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Profile Picture</th>
		</tr>
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
	</table>
	<?php
	if(isset($_COOKIE["username"])) {
		echo "<p>Welcome, " . $_COOKIE["username"] . "!</p>";
	}
	?>
</body>
</html>
