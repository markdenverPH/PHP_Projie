<!-- HI! -->

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=David+Libre|Hind:400,700" rel="stylesheet">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<title>Home</title>
	<style type="text/css">
		a{
			text-decoration: none !important;
		}
	</style>
</head>
<body>
	<header class="cd-auto-hide-header">
		<div class="logo"><a href="#0"><img src="assets/img/ic_logo.png" style="width:30%;" alt="Logo"></a></div>

		<nav class="cd-primary-nav main-nav">
			<a href="#cd-navigation" class="nav-trigger">
				<span>
					<em aria-hidden="true"></em>
					Menu
				</span>
			</a> <!-- .nav-trigger -->

			<ul id="cd-navigation">
				<li><a href="#0">Flight Packages</a></li>
				<li><a href="#0">About Us</a></li>
				<li><a href="#0" >Contacts</a></li>
				<li  ><a href="fragments/login.php"><b>Login</b></a></li>
			</ul>
		</nav> <!-- .cd-primary-nav -->
	</header> <!-- .cd-auto-hide-header -->

	<section class="cd-hero">
		<div class="cd-hero-content" style="padding: 0 !important; margin: 0 !important;">
			<div class="container-fluid" >
				<div class="col-md-6" style="margin:0px; padding: 0px;">

					<div id="googleMap" style="width:100%;height:250px;"></div>
				</div>
				<div class="col-md-6" id="RightDiv">


					<!-- MANILA DESCRIPTION -->
					<div class="container-fluid" id="Manila"  style="height: 100%; display: visible">
						<?php include('IntroDescriptions/Manila.php'); ?>
					</div>

					<!-- LEGASPI DESCRIPTION -->
					<div class="container-fluid" id="Legaspi"  style="height: 100%; display: none;">
						<?php include('IntroDescriptions/Legaspi.php'); ?>
					</div>

					<!-- Boracay DESCRIPTION -->
					<div class="container-fluid" id="Boracay"  style="height: 100%; display: none;">
						<?php include('IntroDescriptions/Boracay.php'); ?>
					</div>

					<!-- CALBAYOG DESCRIPTION -->
					<div class="container-fluid" id="Calbayog"  style="height: 100%; display: none;">
						<?php include('IntroDescriptions/Calbayog.php'); ?>
					</div>

					<!-- BACOLOD DESCRIPTION -->
					<div class="container-fluid" id="Bacolod"  style="height: 100%; display: none;">
						<?php include('IntroDescriptions/Bacolod.php'); ?>
					</div>

					<!-- BATANES DESCRIPTION -->
					<div class="container-fluid" id="Batanes"  style="height: 100%; display: none;">
						<?php include('IntroDescriptions/Batanes.php'); ?>
					</div>

					<!-- CORON DESCRIPTION -->
					<div class="container-fluid" id="Coron"  style="height: 100%; display: none;">
						<?php include('IntroDescriptions/Coron.php'); ?>
					</div>


					<!-- DAVAO DESCRIPTION -->
					<div class="container-fluid" id="Davao"  style="height: 100%; display: none;">
						<?php include('IntroDescriptions/Davao.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>








	<script>
		function myMap() {
			var mapProp= {
				center:new google.maps.LatLng(12.8797,121.7740),
				zoom:5,
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);


			//Manila
			var Manila = new google.maps.LatLng(14.5995,120.9842);
			var marker_Manila = new google.maps.Marker({position:Manila});
			marker_Manila.setMap(map);
			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h1 id="firstHeading" class="CityLabel">Manila</h1>'+
			'</div>';
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			marker_Manila.addListener('mouseover', function() {
				infowindow.open(map, marker_Manila);
			});
			marker_Manila.addListener('mouseout', function() {
				infowindow.close(map, marker_Manila);
			});

			marker_Manila.addListener('click', function() {
				var x = document.getElementById('Manila');
				var x_1 = document.getElementById('Legaspi');
				var x_2 = document.getElementById('Boracay');
				var x_3 = document.getElementById('Calbayog');
				var x_4 = document.getElementById('Bacolod');
				var x_5 = document.getElementById('Batanes');
				var x_6 = document.getElementById('Coron');

				if (x.style.display === 'none') {
					$(x).fadeIn("slow");
					x_1.style.display = 'none';
					x_2.style.display = 'none';
					x_3.style.display = 'none';
					x_4.style.display = 'none';
					x_5.style.display = 'none';
					x_6.style.display = 'none';

				} else {
					$(x).fadeOut("slow");
				}
			});


			//Legaspi
			var Legaspi = new google.maps.LatLng(13.1391,123.7438);
			var marker_Legaspi = new google.maps.Marker({position:Legaspi});
			marker_Legaspi.setMap(map);
			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 id="firstHeading" class="CityLabel">Legaspi</h2>'+
			'</div>';
			var infowindow_2 = new google.maps.InfoWindow({
				content: contentString
			});
			marker_Legaspi.addListener('mouseover', function() {
				infowindow_2.open(map, marker_Legaspi);
			});
			marker_Legaspi.addListener('mouseout', function() {
				infowindow_2.close(map, marker_Legaspi);
			});

			marker_Legaspi.addListener('click', function() {
				var x = document.getElementById('Manila');
				var x_1 = document.getElementById('Legaspi');
				var x_2 = document.getElementById('Boracay');
				var x_3 = document.getElementById('Calbayog');
				var x_4 = document.getElementById('Bacolod');
				var x_5 = document.getElementById('Batanes');
				var x_6 = document.getElementById('Coron');

				if (x_1.style.display === 'none') {
					
					$(x_1).fadeIn("slow");
					x.style.display = 'none';
					x_2.style.display = 'none';
					x_3.style.display = 'none';
					x_4.style.display = 'none';
					x_5.style.display = 'none';
					x_6.style.display = 'none';

				} else {
					$(x_1).fadeOut("slow");
				}
			});


			//Boracay
			var Boracay = new google.maps.LatLng(11.9804,121.9189);
			var marker_Boracay = new google.maps.Marker({position:Boracay});
			marker_Boracay.setMap(map);
			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 id="firstHeading" class="CityLabel">Boracay</h2>'+
			'</div>';
			var infowindow_3 = new google.maps.InfoWindow({
				content: contentString
			});
			marker_Boracay.addListener('mouseover', function() {
				infowindow_3.open(map, marker_Boracay);
			});
			marker_Boracay.addListener('mouseout', function() {
				infowindow_3.close(map, marker_Boracay);
			});

			marker_Boracay.addListener('click', function() {
				var x = document.getElementById('Manila');
				var x_1 = document.getElementById('Legaspi');
				var x_2 = document.getElementById('Boracay');
				var x_3 = document.getElementById('Calbayog');
				var x_4 = document.getElementById('Bacolod');
				var x_5 = document.getElementById('Batanes');
				var x_6 = document.getElementById('Coron');
				if (x_2.style.display === 'none') {
					
					$(x_2).fadeIn("slow");
					x_1.style.display = 'none';
					x.style.display = 'none';
					x_3.style.display = 'none';
					x_4.style.display = 'none';
					x_5.style.display = 'none';
					x_6.style.display = 'none';
				} else {
					$(x_2).fadeOut("slow");
				}
			});


	
		//Bacolod
			var Calbayog = new google.maps.LatLng(12.0676,124.5930);
			var marker_Calbayog = new google.maps.Marker({position:Calbayog});
			marker_Calbayog.setMap(map);
			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 id="firstHeading" class="CityLabel">Calbayog</h2>'+
			'</div>';
			var infowindow_4 = new google.maps.InfoWindow({
				content: contentString
			});
			marker_Calbayog.addListener('mouseover', function() {
				infowindow_4.open(map, marker_Calbayog);
			});
			marker_Calbayog.addListener('mouseout', function() {
				infowindow_4.close(map, marker_Calbayog);
			});

			marker_Calbayog.addListener('click', function() {
				var x = document.getElementById('Manila');
				var x_1 = document.getElementById('Legaspi');
				var x_2 = document.getElementById('Boracay');
				var x_3 = document.getElementById('Calbayog');
				var x_4 = document.getElementById('Bacolod');
				var x_5 = document.getElementById('Batanes');
				var x_6 = document.getElementById('Coron');
				
				if (x_3.style.display === 'none') {
					x_6.style.display = 'none';
					x_5.style.display = 'none';
					x_4.style.display = 'none';
					$(x_3).fadeIn("slow");
					x_2.style.display = 'none';
					x_1.style.display = 'none';
					x.style.display = 'none';
				} else {
					$(x_3).fadeOut("slow");
				}
			});




			//Bacolod
			var Bacolod = new google.maps.LatLng(10.6407,122.9690);
			var marker_Bacolod = new google.maps.Marker({position:Bacolod});
			marker_Bacolod.setMap(map);
			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 id="firstHeading" class="CityLabel">Bacolod</h2>'+
			'</div>';
			var infowindow_5 = new google.maps.InfoWindow({
				content: contentString
			});
			marker_Bacolod.addListener('mouseover', function() {
				infowindow_5.open(map, marker_Bacolod);
			});
			marker_Bacolod.addListener('mouseout', function() {
				infowindow_5.close(map, marker_Bacolod);
			});

			marker_Bacolod.addListener('click', function() {
				var x = document.getElementById('Manila');
				var x_1 = document.getElementById('Legaspi');
				var x_2 = document.getElementById('Boracay');
				var x_3 = document.getElementById('Calbayog');
				var x_4 = document.getElementById('Bacolod');
				var x_5 = document.getElementById('Batanes');
				var x_6 = document.getElementById('Coron');
				
				if (x_4.style.display === 'none') {
					x_6.style.display = 'none';
					x_5.style.display = 'none';
					$(x_4).fadeIn("slow");
					x_3.style.display = 'none';
					x_2.style.display = 'none';
					x_1.style.display = 'none';
					x.style.display = 'none';
				} else {
					$(x_4).fadeOut("slow");
				}
			});


				//Batanes
			var Batanes = new google.maps.LatLng(20.4485,121.9708);
			var marker_Batanes = new google.maps.Marker({position:Batanes});
			marker_Batanes.setMap(map);
			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 id="firstHeading" class="CityLabel">Batanes</h2>'+
			'</div>';
			var infowindow_6 = new google.maps.InfoWindow({
				content: contentString
			});
			marker_Batanes.addListener('mouseover', function() {
				infowindow_6.open(map, marker_Batanes);
			});
			marker_Batanes.addListener('mouseout', function() {
				infowindow_6.close(map, marker_Batanes);
			});

			marker_Batanes.addListener('click', function() {
				var x = document.getElementById('Manila');
				var x_1 = document.getElementById('Legaspi');
				var x_2 = document.getElementById('Boracay');
				var x_3 = document.getElementById('Calbayog');
				var x_4 = document.getElementById('Bacolod');
				var x_5 = document.getElementById('Batanes');
				var x_6 = document.getElementById('Coron');
				if (x_5.style.display === 'none') {
					x_6.style.display = 'none';
					$(x_5).fadeIn("slow");
					x_4.style.display = 'none';
					x_3.style.display = 'none';
					x_2.style.display = 'none';
					x_1.style.display = 'none';
					x.style.display = 'none';
				} else {
					$(x_5).fadeOut("slow");
				}
			});


					//Coron
			var Coron = new google.maps.LatLng(11.9283,120.2397);
			var marker_Coron = new google.maps.Marker({position:Coron});
			marker_Coron.setMap(map);
			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 id="firstHeading" class="CityLabel">Coron</h2>'+
			'</div>';
			var infowindow_7 = new google.maps.InfoWindow({
				content: contentString
			});
			marker_Coron.addListener('mouseover', function() {
				infowindow_7.open(map, marker_Coron);
			});
			marker_Coron.addListener('mouseout', function() {
				infowindow_7.close(map, marker_Coron);
			});

			marker_Coron.addListener('click', function() {
				var x = document.getElementById('Manila');
				var x_1 = document.getElementById('Legaspi');
				var x_2 = document.getElementById('Boracay');
				var x_3 = document.getElementById('Calbayog');
				var x_4 = document.getElementById('Bacolod');
				var x_5 = document.getElementById('Batanes');
				var x_6 = document.getElementById('Coron');

				if (x_6.style.display === 'none') {
					$(x_6).fadeIn("slow");
					x_5.style.display = 'none';
					x_4.style.display = 'none';
					x_3.style.display = 'none';
					x_2.style.display = 'none';
					x_1.style.display = 'none';
					x.style.display = 'none';
				} else {
					$(x_6).fadeOut("slow");
				}
			});



					//Davao
			var Davao = new google.maps.LatLng(7.1907,125.4553);
			var marker_Davao = new google.maps.Marker({position:Davao});
			marker_Davao.setMap(map);
			var contentString = '<div id="content">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 id="firstHeading" class="CityLabel">Davao</h2>'+
			'</div>';
			var infowindow_8 = new google.maps.InfoWindow({
				content: contentString
			});
			marker_Davao.addListener('mouseover', function() {
				infowindow_8.open(map, marker_Davao);
			});
			marker_Davao.addListener('mouseout', function() {
				infowindow_8.close(map, marker_Davao);
			});

			marker_Davao.addListener('click', function() {
				var x = document.getElementById('Manila');
				var x_1 = document.getElementById('Legaspi');
				var x_2 = document.getElementById('Boracay');
				var x_3 = document.getElementById('Calbayog');
				var x_4 = document.getElementById('Bacolod');
				var x_5 = document.getElementById('Batanes');
				var x_6 = document.getElementById('Coron');
				var x_7 = document.getElementById('Davao');

				if (x_7.style.display === 'none') {
					$(x_7).fadeIn("slow");
					x_6.style.display = 'none';
					x_5.style.display = 'none';
					x_4.style.display = 'none';
					x_3.style.display = 'none';
					x_2.style.display = 'none';
					x_1.style.display = 'none';
					x.style.display = 'none';
				} else {
					$(x_7).fadeOut("slow");
				}
			});








		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsmOC86SUwroCxKFjc2730N4vsyBL264g&callback=myMap"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script>
		if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"></script>');
	</script>
	<script src="js/WebScript.js"></script>
	<script src="js/main.js"></script>

	<script src="js/main_login.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>