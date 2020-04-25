<?php
	include_once 'php_script/db_connec_resume.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Admin Panel
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link href="style/table.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1 align="center">Hello Admin!</h1>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Address</th>
			<th>City</th>
			<th>Field 1</th>
			<th>Field 2</th>
			<th>Field 3</th>
			<th>Field 4</th>
			<th>Field 5</th>
			<th>Field 6</th>
			<th>Field 7</th>
			<th>Field 8</th>
			<th>Field 9</th>
			<th>Field 10</th>
			<th>Field 11</th>
			<th>Field 12</th>
			<th>Field 13</th>
			<th>Field 14</th>
			<th>Field 15</th>
		</tr>
		<?php
		$sql = "SELECT * FROM table1";
		$result = $conn-> query($sql);
		if($result-> num_rows > 0)
		{
			while($row = $result-> fetch_assoc()){
				echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["address"] . "</td><td>" . $row["city"] . "</td><td>" . $row["f1"] . "</td><td>" . $row["f2"] . "</td><td>" . $row["f3"] . "</td><td>" . $row["f4"] . "</td><td>" . $row["f5"] . "</td><td>" . $row["f6"] . "</td><td>" . $row["f7"] . "</td><td>" . $row["f8"] . "</td><td>" . $row["f9"] . "</td><td>" . $row["f10"] . "</td><td>" . $row["f11"] . "</td><td>" . $row["f12"] . "</td><td>" . $row["f13"] . "</td><td>" . $row["f14"] . "</td><td>" . $row["f15"] . "</td></tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "0 Result";
		}
		$conn-> close();
		?>
	</table>
</body>
</html>
