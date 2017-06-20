
<?php 
include '../MainLinks.html';
if (isset($_POST['checkFlight'])) {
	
	date_default_timezone_set("Asia/Manila");

	$var_descFrom = $_POST['descFromS'];
	$var_descTo = $_POST['descToS'];

	$var_dateFrom = $_POST['dateFrom'];
	$var_dateFromUnix = strtotime("$var_dateFrom");

	$var_dateTo = $_POST['dateTo'];
	$var_dateToUnix = strtotime("$var_dateTo");

	$var_noPass = $_POST['noPass'];
	$var_cabinClass = $_POST['cabinClass'];

	$var_descFromWords;
	$var_descToWords;
	$var_diffDest = $var_descTo - $var_descFrom;
	if ($var_diffDest<0) {
		$var_diffDest=$var_diffDest*-1;
	}
	include("BookFlight-Destinations-Words.php");
	/*
	Date Checker para sigurado
	echo " $vardateFromUnix <br>";
	echo "<br>".date("F j, Y ",$vardateFromUnix)."<br>";
	echo " $vardateToUnix <br>";
	echo "<br>".date("F j, Y ",$vardateToUnix)."<br>";*/
}

?>
<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6" style="text-align: center;">
		<h1>SUMMARY </h1>
		<h3 class="pull-left">Destination</h3>
		<br><br>
		<h3><?php echo "$var_descFromWords - $var_descToWords"; ?></h3>

		<h3 class="pull-left">Flight Dates</h3>
		<br><br>
		<h3><?php echo "$var_dateFrom - $var_dateTo"; ?></h3>

		<h3 class="pull-left">Cabin Class</h3>
		<br><br>
		<h3><?php echo "$var_cabinClass - $var_noPass person/s"; ?></h3>
		
		<?php 
		$shit = rand($var_dateFromUnix, $var_dateToUnix);

		
		?>
		
	</div>
	<div class="col-md-3"></div>
</div>
<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<h3 class="pull-left">Available Flight/s</h3>
		<br><br>
		<table class="table" style="border-radius: 5px;">
			<thead>
				<tr>
					<th>Destination</th>
					<th>Class</th>
					<th>Flight Date</th>
					<th>Reserve</th>
				</tr>
			</thead>
			<tbody>
				<tr class="success">
					<td><?php echo "$var_descFromWords - $var_descToWords"; ?></td>
					<td><?php echo "$var_cabinClass - $var_noPass person/s"; ?></td>
					<td><?php echo date("F j, Y ",$shit); ?></td>
					<td><button type="button" class="btn btn-success">Reserve</button></td>
				</tr>
			</tbody>
		</table>

	</div>
	<div class="col-md-2"></div>
</div>

