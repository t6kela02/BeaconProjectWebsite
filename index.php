<!DOCTYPE html>
<html>
	<head>
		<title>Website</title>
	</head>
	<body>
		<div id="demo"><h2>Hello</h2></div>
		
		<?php
			include('connection.php');
		
			$sqlget = "SELECT * FROM data";
			$sqldata = mysqli_query($dbcon, $sqlget) or die('error');

			echo "<table>";
			echo "<tr><th>Beacon name</th><th>seconds</th></tr>";

			while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){

				echo "<tr><td>";
				echo $row['beacon_name'];
				echo "</td><td>";
				echo $row['seconds'];
				echo "</td></tr>";
			}

			echo "</table>";
		?>

		<button type="button" onclick="loadDoc()">Change Content</button>

		<script src="https://code.jquery.com/jquery-3.1.1.min.js"
				  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
				  crossorigin="anonymous"></script>
	</body>
</html>
