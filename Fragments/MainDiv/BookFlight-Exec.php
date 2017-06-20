
<?php 
if (isset($_POST['checkFlight'])) {
	
	date_default_timezone_set("Asia/Manila");
	$vardescFrom = $_POST['descFrom'];

	$var_descTo = $_POST['descTo'];
	$var_dateFrom = $_POST['dateFrom'];
	$var_dateFromUnix = strtotime("$var_dateFrom");
	$var_dateTo = $_POST['dateTo'];
	$var_dateToUnix = strtotime("$var_dateTo");
	$var_noPass = $_POST['noPass'];
	$var_cabinClass = $_POST['cabinClass'];
	
	/*
	Date Checker para sigurado
	echo " $vardateFromUnix <br>";
	echo "<br>".date("F j, Y ",$vardateFromUnix)."<br>";
	echo " $vardateToUnix <br>";
	echo "<br>".date("F j, Y ",$vardateToUnix)."<br>";*/






}

