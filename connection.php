<?php

	DEFINE ('DB_USER', 'accountit');
	DEFINE ('DB_PSWD', 'Ru8tmg~976-i');
	DEFINE ('DB_HOST', 'den1.mysql3.gear.host');
	DEFINE ('DB_NAME', 'accountit');

	$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

	/*Getting users spend time*/
	$beacon1time = 0;
	$sqlget1 = 'SELECT * FROM data WHERE beacon_name = "Paikka 1"';
	$sqldata1 = mysqli_query($dbcon, $sqlget1) or die('Error loading data');

	while($row = mysqli_fetch_array($sqldata1, MYSQLI_ASSOC)){
		$beacon1time = $beacon1time + $row['seconds'];
	}

	$beacon2time = 0;
	$sqlget2 = 'SELECT * FROM data WHERE beacon_name = "Paikka 2"';
	$sqldata2 = mysqli_query($dbcon, $sqlget2) or die('Error loading data');

	while($row = mysqli_fetch_array($sqldata2, MYSQLI_ASSOC)){
		$beacon2time = $beacon2time + $row['seconds'];
	}

	$beacon3time = 0;
	$sqlget3 = 'SELECT * FROM data WHERE beacon_name = "Paikka 3"';
	$sqldata3 = mysqli_query($dbcon, $sqlget3) or die('Error loading data');

	while($row = mysqli_fetch_array($sqldata3, MYSQLI_ASSOC)){
		$beacon3time = $beacon3time + $row['seconds'];
	}

	$beacon4time = 0;
	$sqlget4 = 'SELECT * FROM data WHERE beacon_name = "Paikka 4"';
	$sqldata4 = mysqli_query($dbcon, $sqlget4) or die('Error loading data');

	while($row = mysqli_fetch_array($sqldata4, MYSQLI_ASSOC)){
		$beacon4time = $beacon4time + $row['seconds'];
	}

	$beacon5time = 0;
	$sqlget5 = 'SELECT * FROM data WHERE beacon_name = "Paikka 5"';
	$sqldata5 = mysqli_query($dbcon, $sqlget5) or die('Error loading data');

	while($row = mysqli_fetch_array($sqldata5, MYSQLI_ASSOC)){
		$beacon5time = $beacon5time + $row['seconds'];
	}
?>
