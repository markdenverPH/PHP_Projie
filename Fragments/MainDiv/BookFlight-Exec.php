
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
	$var_cabinClassTotal;
	$var_descFromWords;
	$var_descToWords;
	$var_AirFare = 2000;
	$var_diffDest = $var_descTo - $var_descFrom;
	if ($var_diffDest<0) {
		$var_diffDest=$var_diffDest*-1;
	}
	if ($var_cabinClass == "ECNMY") {
		$var_cabinClassTotal = 2000;
	}else{
		$var_cabinClassTotal = 3000;
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

<!DOCTYPE html>
<html>
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title> Pakito | Summary</title>
</head>
<body>

	<center><h1>SUMMARY</h1></center>
	<div class="container-fluid">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h3 class="pull-left">You searched for:</h3> 
			<br><br>
			<table class="table" style="border-radius: 5px;">
				<thead>
					<tr>
						<th>Destination</th>
						<th>Flight Dates</th>
						<th>Cabin Class</th>
					</tr>
				</thead>
				<tbody>
					<tr class="info">
						<td><?php echo "$var_descFromWords - $var_descToWords"; ?></td>
						<td><?php echo "$var_dateFrom - $var_dateTo"; ?></td>
						<td><?php echo "$var_cabinClass - $var_noPass person/s"; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>


	<?php 
	$shit = rand($var_dateFromUnix, $var_dateToUnix); 
	$var_AirFareComp = $var_diffDest * $var_AirFare; 

	$var_Total = ($var_AirFareComp+ $var_cabinClassTotal) *  $var_noPass;

	?>
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
						<th>Total</th>
						<th>Break down</th>
						<th>Reserve</th>
					</tr>
				</thead>
				<tbody>
					<tr class="success">
						<td><?php echo "$var_descFromWords - $var_descToWords"; ?></td>
						<td><?php echo "$var_cabinClass - $var_noPass person/s"; ?></td>
						<td><?php echo date("F j, Y ",$shit); ?></td>
						<td><?php echo "P	$var_Total" ?></td>
						<td><button id="showMoreInfo" type="button" class="btn btn-info" style="width: 100%;">Show</button></td>
						<td><button type="button" class="btn btn-success" style="width: 100%;">Reserve</button></td>
					</tr>
				</tbody>
			</table>
			<center>
				<div class="row" id="moreInfo" style="display: none;">
					

					<table class="table">
						<thead>
							<tr class="active">
								<th>Label</th>
								<th>Description</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Destination</td>
								<td><?php echo "$var_descFromWords - $var_descToWords"; ?></td>
								<td><?php echo "P $var_AirFareComp"; ?></td>
							</tr>   
							<tr>
								<td>Class</td>
								<td><?php echo "$var_cabinClass"; ?></td>
								<td><?php echo "P $var_cabinClassTotal"; ?></td>
							</tr>     
							<tr>
								<td>No of Person</td>
								<td><?php echo "$var_noPass"; ?></td>
								<td><?php echo "- "; ?></td>
							</tr> 
							<tr>
								<td> </td>
								<td><b> Total </b></td>
								<td><?php echo "P $var_Total "; ?></td>
							</tr> 
							<tr>
								<td> </td>
								<td><b> Per person </b></td>
								<td><?php 
									$var_Total_div =  $var_Total/$var_noPass;
									echo "P $var_Total_div ";
									?></td>
								</tr> 
							</tbody>
						</table>
					</div>

					<td><button type="button" class="btn btn-danger">
						<a href="../Landing.php" style="text-decoration: none; color: white;">Cancel</a>
					</button></td>
				</center>

			</div>
			<div class="col-md-2"></div>
		</div>

		<script type="text/javascript">

			var varPakitoMiles = document.getElementById('moreInfo');
			$(document).ready(function(){
				$("#showMoreInfo").click(function(){
					if(varPakitoMiles.style.display === 'none'){
						$(varPakitoMiles).fadeIn("slow"); 
						$("#showMoreInfo").html('Hide');
					}else{
						$(varPakitoMiles).fadeOut("slow");  
						$("#showMoreInfo").html('Show');
					}
				});
			});


		</script>

	</body>
	</html>