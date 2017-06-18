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
				<li class=""><a href="#0">Main Page</a></li>
				<li class="active"><a href="#0">Book a Package</a></li>
				<li class=""><a href="#0">Manage Booking</a></li>
				<li class=""><a href="#0">Check In</a></li>
				<li class=""><a href="#0">Flight Status</a></li>
			</ul>

			<ul>
				<li class="cd-label">Secondary</li>
				<li class="has-children ">
					<a href="#0">Bookmarks</a>
					
					<ul>
						<li><a href="#0">All Bookmarks</a></li>
						<li><a href="#0">Edit Bookmark</a></li>
						<li><a href="#0">Import Bookmark</a></li>
					</ul>
				</li>
				<li class="has-children ">
					<a href="#0">Images</a>
					
					<ul>
						<li><a href="#0">All Images</a></li>
						<li><a href="#0">Edit Image</a></li>
					</ul>
				</li>

				<li class="has-children ">
					<a href="#0">Users</a>
					
					<ul>
						<li><a href="#0">All Users</a></li>
						<li><a href="#0">Edit User</a></li>
						<li><a href="#0">Add User</a></li>
					</ul>
				</li>
			</ul>

			
		</nav>

		<div class="content-wrapper">
			<h1>Responsive Sidebar Navigation</h1>
		</div>
	</main> 
	<script src="../js/jquery-2.1.4.js"></script>
	<script src="../js/jquery.menu-aim.js"></script>
	<script src="../js/Landingmain.js"></script> 
</body>
</html>