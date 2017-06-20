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
				<li class="active" id="limainpagee"><a href="#0" id="mainpagee">Main Page</a></li>
				<li class="" id="libookflight"><a href="#0" id="bookfligt">Book a Flight</a></li>
				<li class="" id="libookpackage"><a href="#0" id="bookpackage">Book a Package</a></li>
				<li class="" id="limanagebooking"><a href="#0" id="managebooking">Manage Booking</a></li>
				<li class="" id="lipakitomiles"><a href="#0" id="pakitomiles">Pakito Miles</a></li>
				<li class="" id="liflightstatus"><a href="#0" id="flightstatus">Flight Status</a></li>
			</ul>

			<ul>
				<li class="cd-label">Quick Links</li>
				<li class="" id="liannouncements"><a href="#0" id="announcements">Announcements</a></li>
				<li class="" id="lifaqs"><a href="#0" id="faqs">FAQs</a></li>
				<li class="" id="licustomerservice"><a href="#0" id="customerservice">Customer Service</a></li>
			</ul>

			
		</nav>
		<!--Main Page-->

		<div class="content-wrapper">
			<?php include('MainLinks.html'); ?> 
			<div class="container-fluid divMain" id="MainPage" style="height: 100%;">
				<?php include 'MainDiv/Main.php'; ?>
			</div>

			<div class="container-fluid divMain" id="BookFlight" style="height: 100%; display:  none;">
				<?php include 'MainDiv/BookFlight.php'; ?>
			</div>

			<div class="container-fluid divMain" id="BookPackage" style="height: 100%; display:  none;">
				<?php include 'MainDiv/BookPackage.php'; ?>
			</div>
			
			<div class="container-fluid divMain" id="ManageBooking" style="height: 100%; display:  none;">
				<div class="col-md-4"></div>
				<div class="col-md-4"><h1>Trial 3</h1></div>
				<div class="col-md-4"></div>
			</div>

			<div class="container-fluid divMain" id="PakitoMiles" style="height: 100%; display:  none;">
				<div class="col-md-4"></div>
				<div class="col-md-4"><h1>Trial 4</h1></div>
				<div class="col-md-4"></div>
			</div>

			<div class="container-fluid divMain" id="FlighStatus" style="height: 100%; display:  none;">
				<div class="col-md-4"></div>
				<div class="col-md-4"><h1>Trial 5</h1></div>
				<div class="col-md-4"></div>
			</div>

			<div class="container-fluid divMain" id="Announcement" style="height: 100%; display:  none;">
				<div class="col-md-4"></div>
				<div class="col-md-4"><h1>Trial 6</h1></div>
				<div class="col-md-4"></div>
			</div>


			<div class="container-fluid divMain" id="FAQ" style="height: 100%; display:  none;">
				<div class="col-md-4"></div>
				<div class="col-md-4"><h1>Trial 7</h1></div>
				<div class="col-md-4"></div>
			</div>

			<div class="container-fluid divMain" id="CustomerService" style="height: 100%; display:  none;">
				<div class="col-md-4"></div>
				<div class="col-md-4"><h1>Trial 8</h1></div>
				<div class="col-md-4"></div>
			</div>


		</div>
	</main> 
	<script src="../js/jquery-2.1.4.js"></script>
	<script src="../js/jquery.menu-aim.js"></script>
	<script src="../js/Landingmain.js"></script> 
	<script src="../js/WebScript.js"></script> 
	<script type="text/javascript" src="../jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.js" charset="UTF-8"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#reset").click(function() {
				$(this).closest('form').find("input[type=text], textarea").val("");
				$(this).closest('form').find("input[type=number], textarea").val(null);
				$(this).closest('form').find("select, option").val(null);
			});
		});
	</script>


	<script type="text/javascript">
		$('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
		$('.form_date').datetimepicker({
			language:  'fr',
			weekStart: 1,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
		});
		$('.form_time').datetimepicker({
			language:  'fr',
			weekStart: 1,
			todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 1,
			minView: 0,
			maxView: 1,
			forceParse: 0
		});
	</script>


	<!-- Script for slideshow -->
	<script type="text/javascript">
		$(document).ready(function(){

			$("#slideshow > div:gt(0)").hide();

			setInterval(function() { 
				$('#slideshow > div:first')
				.fadeOut(1000)
				.next()
				.fadeIn(1000)
				.end()
				.appendTo('#slideshow');
			},  3000);
		});


	</script>

	<!--  Script to execute fading animation	 -->
	<script type="text/javascript">

		var varMainPage = document.getElementById('MainPage');
		var varBookPackage = document.getElementById('BookPackage');
		var varManageBooking = document.getElementById('ManageBooking');
		var varBookFlight = document.getElementById('BookFlight');

		var varPakitoMiles = document.getElementById('PakitoMiles');
		var varFlighStatus = document.getElementById('FlighStatus');
		var varAnnouncement = document.getElementById('Announcement');
		var varFAQ = document.getElementById('FAQ');
		var varCustomerService = document.getElementById('CustomerService');

		$(document).ready(function(){
			var $check = false;
			var $descFrom;
			var $descTo;
			$('#descFrom').on('change', function() {
				$descFrom = this.value;
			})
			$('#descTo').on('change', function() {
				$descTo = this.value;
			})
			$("#checkBtn").click(function(){
				var $dateFrom = $('#dateFrom').val();
				var $dateTo = $('#dateTo').val();

				if($descTo == $descFrom ||  $descTo == null || $descFrom == null){
					$("#divFrom").addClass('btn-danger');
					$("#divTo").addClass('btn-danger');
					$check = false;
				}else{
					$check = true;
				}

				if ($dateFrom == "") {
					$("#dateFrom").addClass('btn-danger');
					$check = false;
				}else{
					$("#dateFrom").removeClass('btn-danger');
				}
				if ($dateTo == "") {
					$("#dateTo").addClass('btn-danger');
					$check = false;
				}else{
					$("#dateTo").removeClass('btn-danger');
				}
				if ($dateFrom == $dateTo || $dateFrom > $dateTo) {
					$("#dateTo").addClass('btn-danger');
					$("#dateFrom").addClass('btn-danger');
					$check = false;
				}else{
					$("#dateTo").removeClass('btn-danger');
					$("#dateFrom").removeClass('btn-danger');
				}

				if ($check == true) {
					$("#divFrom").removeClass('btn-danger');
					$("#divTo").removeClass('btn-danger');
					$("#submitBtn").fadeIn("slow"); 
					$("#checkBtn").hide();
				} else {

				}
			});


			//Main nav onclick
			$("#mainpagee").click(function(){
				// active css toggle
				$("#limainpagee").addClass('active');
				$("#limanagebooking").removeClass('active');
				$("#libookflight").removeClass('active');
				$("#libookpackage").removeClass('active');
				$("#lipakitomiles").removeClass('active');
				$("#liflightstatus").removeClass('active');
				$("#liannouncements").removeClass('active');
				$("#lifaqs").removeClass('active');
				$("#licustomerservice").removeClass('active');
				//
				if (varMainPage.style.display === 'none') {
					$(varMainPage).fadeIn("slow"); 
					$(varManageBooking).fadeOut("slow"); 
					$(varBookFlight).fadeOut("slow"); 
					$(varPakitoMiles).fadeOut("slow"); 
					$(varAnnouncement).fadeOut("slow"); 
					$(varFlighStatus).fadeOut("slow"); 
					$(varCustomerService).fadeOut("slow"); 
					$(varFAQ).fadeOut("slow"); 
					$(varBookPackage).fadeOut("slow"); 

				} else { 	

				}
			});


			//BookPackage nav onclick
			$("#bookpackage").click(function(){

				// active css toggle
				$("#libookpackage").addClass('active');
				$("#limainpagee").removeClass('active');
				$("#libookflight").removeClass('active');
				$("#limanagebooking").removeClass('active');
				$("#lipakitomiles").removeClass('active');
				$("#liflightstatus").removeClass('active');
				$("#liannouncements").removeClass('active');
				$("#lifaqs").removeClass('active');
				$("#licustomerservice").removeClass('active');
				//
				if (varBookPackage.style.display === 'none') {
					$(varBookPackage).fadeIn("slow"); 
					$(varManageBooking).fadeOut("slow"); 
					$(varBookFlight).fadeOut("slow"); 
					$(varPakitoMiles).fadeOut("slow"); 
					$(varFlighStatus).fadeOut("slow"); 
					$(varAnnouncement).fadeOut("slow"); 
					$(varFAQ).fadeOut("slow"); 
					$(varCustomerService).fadeOut("slow"); 
					$(varMainPage).fadeOut("slow"); 

				} else {

				}
			});

			//ManageBooking nav onclick
			$("#managebooking").click(function(){

				// active css toggle
				$("#limanagebooking").addClass('active');
				$("#libookpackage").removeClass('active');
				$("#libookflight").removeClass('active');
				$("#limainpagee").removeClass('active');
				$("#lipakitomiles").removeClass('active');
				$("#liflightstatus").removeClass('active');
				$("#liannouncements").removeClass('active');
				$("#lifaqs").removeClass('active');
				$("#licustomerservice").removeClass('active');
				//
				if (varManageBooking.style.display === 'none') {
					$(varManageBooking).fadeIn("slow"); 
					$(varBookPackage).fadeOut("slow"); 
					$(varBookFlight).fadeOut("slow"); 
					$(varPakitoMiles).fadeOut("slow"); 
					$(varFlighStatus).fadeOut("slow"); 
					$(varAnnouncement).fadeOut("slow"); 
					$(varFAQ).fadeOut("slow"); 
					$(varCustomerService).fadeOut("slow"); 
					$(varMainPage).fadeOut("slow"); 

				} else {

				}
			});

			//CheckIn nav onclick
			$("#pakitomiles").click(function(){

				// active css toggle
				$("#lipakitomiles").addClass('active');
				$("#limanagebooking").removeClass('active');
				$("#libookpackage").removeClass('active');
				$("#limainpagee").removeClass('active');
				$("#libookflight").removeClass('active');
				$("#liflightstatus").removeClass('active');
				$("#liannouncements").removeClass('active');
				$("#lifaqs").removeClass('active');
				$("#licustomerservice").removeClass('active');
				//
				if (varPakitoMiles.style.display === 'none') {
					$(varPakitoMiles).fadeIn("slow"); 
					$(varManageBooking).fadeOut("slow"); 
					$(varBookFlight).fadeOut("slow"); 
					$(varBookPackage).fadeOut("slow"); 
					$(varFlighStatus).fadeOut("slow"); 
					$(varAnnouncement).fadeOut("slow"); 
					$(varFAQ).fadeOut("slow"); 
					$(varCustomerService).fadeOut("slow"); 
					$(varMainPage).fadeOut("slow"); 

				} else {

				}
			});

			//FlightStatus nav onclick
			$("#flightstatus").click(function(){

				// active css toggle
				$("#liflightstatus").addClass('active');
				$("#lipakitomiles").removeClass('active');
				$("#limanagebooking").removeClass('active');
				$("#libookflight").removeClass('active');
				$("#libookpackage").removeClass('active');
				$("#limainpagee").removeClass('active');
				$("#liannouncements").removeClass('active');
				$("#lifaqs").removeClass('active');
				$("#licustomerservice").removeClass('active');
				//
				if (varFlighStatus.style.display === 'none') {
					$(varFlighStatus).fadeIn("slow"); 
					$(varBookFlight).fadeOut("slow"); 
					$(varPakitoMiles).fadeOut("slow"); 
					$(varManageBooking).fadeOut("slow"); 
					$(varBookPackage).fadeOut("slow"); 
					$(varAnnouncement).fadeOut("slow"); 
					$(varFAQ).fadeOut("slow"); 
					$(varCustomerService).fadeOut("slow"); 
					$(varMainPage).fadeOut("slow"); 

				} else {

				}
			});

			//Announcement nav onclick
			$("#announcements").click(function(){

				// active css toggle
				$("#liannouncements").addClass('active');
				$("#liflightstatus").removeClass('active');
				$("#libookflight").removeClass('active');
				$("#lipakitomiles").removeClass('active');
				$("#limanagebooking").removeClass('active');
				$("#libookpackage").removeClass('active');
				$("#limainpagee").removeClass('active');
				$("#lifaqs").removeClass('active');
				$("#licustomerservice").removeClass('active');
				//
				if (varFlighStatus.style.display === 'none') {
					$(varAnnouncement).fadeIn("slow"); 
					$(varBookFlight).fadeOut("slow"); 
					$(varFlighStatus).fadeOut("slow"); 
					$(varPakitoMiles).fadeOut("slow"); 
					$(varManageBooking).fadeOut("slow"); 
					$(varBookPackage).fadeOut("slow"); 
					$(varFAQ).fadeOut("slow"); 
					$(varCustomerService).fadeOut("slow"); 
					$(varMainPage).fadeOut("slow"); 

				} else {

				}
			});


			//FAQs nav onclick
			$("#faqs").click(function(){

				// active css toggle
				$("#lifaqs").addClass('active');
				$("#liannouncements").removeClass('active');
				$("#liflightstatus").removeClass('active');
				$("#libookflight").removeClass('active');
				$("#lipakitomiles").removeClass('active');
				$("#limanagebooking").removeClass('active');
				$("#libookpackage").removeClass('active');
				$("#limainpagee").removeClass('active');
				$("#licustomerservice").removeClass('active');
				//
				if (varFAQ.style.display === 'none') {
					$(varFAQ).fadeIn("slow"); 
					$(varBookFlight).fadeOut("slow"); 
					$(varAnnouncement).fadeOut("slow"); 
					$(varFlighStatus).fadeOut("slow"); 
					$(varPakitoMiles).fadeOut("slow"); 
					$(varManageBooking).fadeOut("slow"); 
					$(varBookPackage).fadeOut("slow"); 
					$(varCustomerService).fadeOut("slow"); 
					$(varMainPage).fadeOut("slow"); 

				} else {

				}
			});

				//Customer Service nav onclick
				$("#customerservice").click(function(){

				// active css toggle
				$("#licustomerservice").addClass('active');
				$("#lifaqs").removeClass('active');
				$("#liannouncements").removeClass('active');
				$("#liflightstatus").removeClass('active');
				$("#lipakitomiles").removeClass('active');
				$("#libookflight").removeClass('active');
				$("#limanagebooking").removeClass('active');
				$("#libookpackage").removeClass('active');
				$("#limainpagee").removeClass('active');
				//
				if (varCustomerService.style.display === 'none') {
					$(varCustomerService).fadeIn("slow"); 
					$(varBookFlight).fadeOut("slow"); 
					$(varFAQ).fadeOut("slow"); 
					$(varAnnouncement).fadeOut("slow"); 
					$(varFlighStatus).fadeOut("slow"); 
					$(varPakitoMiles).fadeOut("slow"); 
					$(varManageBooking).fadeOut("slow"); 
					$(varBookPackage).fadeOut("slow"); 
					$(varMainPage).fadeOut("slow"); 

				} else {

				}
			});

			//Book a flight nav onclick
			$("#bookfligt").click(function(){

				// active css toggle
				$("#libookflight").addClass('active');
				$("#licustomerservice").removeClass('active');
				$("#lifaqs").removeClass('active');
				$("#liannouncements").removeClass('active');
				$("#liflightstatus").removeClass('active');
				$("#lipakitomiles").removeClass('active');
				$("#limanagebooking").removeClass('active');
				$("#libookpackage").removeClass('active');
				$("#limainpagee").removeClass('active');
				//
				if (varBookFlight.style.display === 'none') {
					$(varBookFlight).fadeIn("slow"); 
					$(varCustomerService).fadeOut("slow"); 
					$(varFAQ).fadeOut("slow"); 
					$(varAnnouncement).fadeOut("slow"); 
					$(varFlighStatus).fadeOut("slow"); 
					$(varPakitoMiles).fadeOut("slow"); 
					$(varManageBooking).fadeOut("slow"); 
					$(varBookPackage).fadeOut("slow"); 
					$(varMainPage).fadeOut("slow"); 

				} else {

				}
			});


		});

	</script>
</body>
</html>