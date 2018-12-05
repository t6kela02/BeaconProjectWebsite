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
				<li><a href="#App">App</a></li>
				<li><a href="#Data">Data</a></li>
				<li><a href="#">Home</a></li>
			</ul>
		</div>
	</nav>
	
	<header id="main-header">
		<div class="container">
			<h1>Beacon Project</h1>
		</div>
	</header>
	
	<div class="container">
		<section id="main">
			<h1>Project</h1>
			<p>
			The project uses Estimoto beacons, which the Android application recognises using bluethooth. 
			The application saves the time spent near a certain beacon to the database and user can view own or all users spent time.
			</p>
		</section>
		<section id="beaconimg">
			<img src="images/beacon1.png"/>
		</section>
	</div>
	
	<a name="Data" class="anchor"></a>
	<div class="whitetextarea">
		<h1>Data</h1>
		<p>All users time by seconds near at different beacon</p>
		<canvas id="myChart"></canvas>
	</div>
	
	<?php
		include('connection.php');
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
				labels: ["Location 1", "Location 2", "Location 3", "Location 4", "Location 5"],
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
						fontColor: 'black'
					}
				}
			}
		});
	</script>
	
	<a name="App" class="anchor"></a>
	<div class="whitetextarea">
		<h1>App</h1>
		<section class="appPlace">
			<img class="appImg" src="images/appLogin.png"/>
			<p>You can log in or make a new account</p>
		</section>
		<section class="appPlace">
			<img class="appImg" src="images/appUserdata1.png"/>
			<p>Watch your own or all users data</p>
		</section>
		<section class="appPlace">
			<img class="appImg" src="images/appBeacondata.png"/>
			<p>See time spent near at any beacon by date</p>
		</section>
	</div>
	
	<footer id="main-footer">
		<p class="container">&copy 2018</p>
	</footer>
</body>
</html>
