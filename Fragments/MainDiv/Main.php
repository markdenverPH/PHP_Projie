<?php


if($_SESSION['is_logged'] == FALSE){
	header("Location: login.php");
}

?>

<h1 class="pull-left BannMsg">Welcome to Pakito Airlines.</h1>
<br><br>


<div id="slideshow" class="row">
	<div>
		<img src="../img/banner.jpg" style="height: 100%; width: 100%;">
	</div>
	<div>
		<img src="../img/banner2.jpg" style="height: 100%; width: 100%;">
	</div>
	<div>
		<img src="../img/banner3.jpg" style="height: 100%; width: 100%;">
	</div>			
</div>		

<!-- Card numero uno, ilagay dito ang mga putapeteng other links -->
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<h1 class="pull-left">Sponsors</h1><br><br><br><br>
		<div class="card card-inverse CardStyle" style="background-color: #fff; border-color: #333;">
			<div class="card-block">
				<h2 class="card-title">Life gets more rewarding with GCash Rewards!</h2>
				<p class="card-text">Sign up for FREE and earn Miles <br>
					when you fly, shop, dine, drive, and unwind.</p>
					<a href="https://www.gcash.com/personal/getting-started" target="_blank" class="btn btn-primary pull-right">Learn More</a>
					<br>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>

	<br>
	<!-- Card numero duso, ilagay dito ang mga putapeteng other links -->
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="card card-inverse CardStyle" style="background-color: #fff; border-color: #333;">
				<div class="card-block">
					<h2 class="card-title">Mabuhay Magazine June issue now available!</h2>
					<p class="card-text">A Chinese-Filipino is making a scene in Kuala Lumpur <br>
					 with her cold-pressed green juice, La Juiceria! Anabelle -Co Martinent co-owns <br>
					 this budding food and beverage company which promotes the benefits of juicing. <br>
					 Join us as she takes us through a weekend of adventure in the city of Kuala Lumpur.</p>
						<a href="#" class="btn btn-primary pull-right">Purchase now</a>
						<br>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>

		
		<br>
		<!-- Card numero duso, ilagay dito ang mga putapeteng other links -->
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="card card-inverse CardStyle" style="background-color: #fff; border-color: #333;">
					<div class="card-block">
						<h2 class="card-title">Don't get lost, use Sakay.ph!</h2>
						<p class="card-text">Sakay.ph is a web service and app that helps <br>
						 people use jeepneys, buses, and trains in Metro Manila. It’s like Google Maps or <br> Waze, but for commuting!</p>
							<a href="https://sakay.ph/" target="_blank" class="btn btn-primary pull-right">Learn More</a>
							<br>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>

			<br><br>