<?php

	DEFINE ('DB_USER', 'accountit');
	DEFINE ('DB_PSWD', 'Ru8tmg~976-i');
	DEFINE ('DB_HOST', 'den1.mysql3.gear.host');
	DEFINE ('DB_NAME', 'accountit');

    $dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

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
