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
		<div class="navigationbar">
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
						fontColor: 'white'
					}
				}
			}
		});
	</script>
	
	
	<div id="dataheader"><h2>Data</h2></div>
		
	<div>
		<img src="images/appLogin.jpg"/>
	</div>
	
	<a name="footer"></a>
	<footer id="main-footer">
		<p>Copyright &copy 2018 My Website</p>
	</footer>
</body>
</html>
