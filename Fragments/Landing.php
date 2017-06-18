<?php

session_start();


if($_SESSION['is_logged'] == FALSE){
	header("Location: login.php");
}

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link rel="stylesheet" href="../css/Landreset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/Landstyle.css"> <!-- Resource style -->
	<script src="../js/Landingmodernizr.js"></script> <!-- Modernizr -->

	<title>Pakito Airlines | Welcome</title>
</head>
<body>
	<header class="cd-main-header">
		<a href="#0" class="cd-logo"><img src="../img/cd-logo.svg" alt="Logo"></a>
		


		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="#0">Pakito Store</a></li>
				<li><a href="#0">Support</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="../img/cd-avatar.png" alt="avatar">
						Account
					</a>

					<ul>

						<li><a href="#0">My Account</a></li>
						<li><a href="#0">Edit Account</a></li>

						<li><a href="logout.php">Logout</a></li>						
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">User Navigations</li>
				<li class=""><a href="#0" id="mainpagee">Main Page</a></li>
				<li class="active"><a href="#0" id="bookpackage">Book a Package</a></li>
				<li class=""><a href="#0" id="managebooking">Manage Booking</a></li>
				<li class=""><a href="#0" id="checkin">Check In</a></li>
				<li class=""><a href="#0" id="flightstatus">Flight Status</a></li>
			</ul>

			<ul>
				<li class="cd-label">Quick Links</li>
				<li class=""><a href="#0" id="announcements">Announcements</a></li>
				<li class=""><a href="#0" id="faqs">FAQs</a></li>
				<li class=""><a href="#0" id="customerservice">Customer Service</a></li>
			</ul>

			
		</nav>
		<!--Main Page-->

		<div class="content-wrapper">
			<?php include('MainLinks.html'); ?> 
			<div class="container-fluid divMain" id="MainPage" style="height: 100%;">
				<div class="col-md-4"></div>
				<div class="col-md-4"><h1>Trial</h1></div>
				<div class="col-md-4"></div>
			</div>

			<div class="container-fluid divMain" id="BookPackage" style="height: 100%; display:  none;">
				<div class="col-md-4"></div>
				<div class="col-md-4"><h1>Trial 2</h1></div>
				<div class="col-md-4"></div>
			</div>



		</div>
	</main> 
	<script src="../js/jquery-2.1.4.js"></script>
	<script src="../js/jquery.menu-aim.js"></script>
	<script src="../js/Landingmain.js"></script> 

	<!--  Script to execute fading animation	 -->
	<script type="text/javascript">

		var varMainPage = document.getElementById('MainPage');
		var varBookPackage = document.getElementById('BookPackage');
		$(document).ready(function(){

			//Main nav onclick
			$("#mainpagee").click(function(){
				if (varMainPage.style.display === 'none') {
					$(varMainPage).fadeIn("slow"); 
					$(varBookPackage).fadeOut("slow"); 

				} else { 
				}
			});


			//BookPackage nav onclick
			$("#bookpackage").click(function(){
				if (varBookPackage.style.display === 'none') {
					$(varBookPackage).fadeIn("slow"); 
					$(varMainPage).fadeOut("slow"); 

				} else {

				}
			});


		});

	</script>
</body>
</html>