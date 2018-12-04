<!DOCTYPE html>
<html>
<head>
	<title>Beacon Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<nav id="navbar">
		<div class="container">
			<ul>
				<li><a href="#footer">App</a></li>
				<li><a href="#">Data</a></li>
				<li><a href="#">Home</a></li>
			</ul>
		</div>
	</nav>
	
	<header id="main-header">
		<div class="container">
			<h1>Beacon Project</h1>
		</div>
	</header>
	
	<section id="showcase">
		<div class="container">
			<h1>
			Title
			</h1>
			<p>
			Text here!
			</p>
		</div>
	</section>
	
	<div class="container">
		<section id="main">
			<h1>
			Title
			</h1>
			<p>
			Text here!
			</p>
		</section>
		
		<aside id="sidebar">
			<p>
			sidepbar
			</p>
		</aside>
	</div>
	
	<div class="container">
		<canvas id="myChart"></canvas>
	</div>
	
	<?php
		include('connection.php');

		$beacon1time = 0;
		$sqlget1 = 'SELECT * FROM data WHERE beacon_name = "Paikka 1"';
		$sqldata1 = mysqli_query($dbcon, $sqlget1) or die('error');

		while($row = mysqli_fetch_array($sqldata1, MYSQLI_ASSOC)){
			$beacon1time = $beacon1time + $row['seconds'];
		}

		$beacon2time = 0;
		$sqlget2 = 'SELECT * FROM data WHERE beacon_name = "Paikka 2"';
		$sqldata2 = mysqli_query($dbcon, $sqlget2) or die('error');

		while($row = mysqli_fetch_array($sqldata2, MYSQLI_ASSOC)){
			$beacon2time = $beacon2time + $row['seconds'];
		}
	
		$beacon3time = 0;
		$sqlget3 = 'SELECT * FROM data WHERE beacon_name = "Paikka 3"';
		$sqldata3 = mysqli_query($dbcon, $sqlget3) or die('error');

		while($row = mysqli_fetch_array($sqldata3, MYSQLI_ASSOC)){
			$beacon3time = $beacon3time + $row['seconds'];
		}
	
		$beacon4time = 0;
		$sqlget4 = 'SELECT * FROM data WHERE beacon_name = "Paikka 4"';
		$sqldata4 = mysqli_query($dbcon, $sqlget4) or die('error');

		while($row = mysqli_fetch_array($sqldata4, MYSQLI_ASSOC)){
			$beacon4time = $beacon4time + $row['seconds'];
		}
	
		$beacon5time = 0;
		$sqlget5 = 'SELECT * FROM data WHERE beacon_name = "Paikka 5"';
		$sqldata5 = mysqli_query($dbcon, $sqlget5) or die('error');

		while($row = mysqli_fetch_array($sqldata5, MYSQLI_ASSOC)){
			$beacon5time = $beacon5time + $row['seconds'];
		}
	?>
	
	<script>
		var beaconData1 = <?php echo json_encode($beacon1time); ?>;
		var beaconData2 = <?php echo json_encode($beacon2time); ?>;
		var beaconData3 = <?php echo json_encode($beacon3time); ?>;
		var beaconData4 = <?php echo json_encode($beacon4time); ?>;
		var beaconData5 = <?php echo json_encode($beacon5time); ?>;

		

		/*Chart.js*/
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ["Paikka 1", "Paikka 2", "Paikka 3", "Paikka 4", "Paikka 5"],
				datasets: [{
					label: '# of Time',
					data: [beaconData1, beaconData2, beaconData3, beaconData4, beaconData5],
					backgroundColor: [
						'#ff6e00',
						'#960000',
						'#00c410',
						'yellow',
						'#1829ba'
					],
					
					borderWidth: 0
				}]
			},
			options:{
				cutoutPercentage: 30,
				layout: {
					padding: {
						left: 0,
						right: 0,
						top: 0,
						bottom: 0
					}
				},
				legend: {
					labels: {
						fontColor: 'white'
					}
				}
			}
		});
	</script>
	
	
	<div id="dataheader"><h2>Data</h2></div>
		
	
	
	<a name="footer"></a>
	<footer id="main-footer">
		<p>Copyright &copy 2018 My Website</p>
	</footer>
</body>
</html>
