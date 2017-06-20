<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="card" style="width: 100%;">
			<center>
				<img class="card-img-top" src="../assets/img/gold.png" style="width: 100%;" alt="Card image cap">
				<div class="card-block">
					<h4 class="card-title">Pakito Miles</h4>
					<p class="card-text">Earning Miles thru Flights, Pakito's first airline, and rely on more than 70 years of flight expertise. Earn Flight Miles with the largest network in the Philippines, and many more destinations around the world – including North Asia, Southeast Asia, Australia, North America, Middle East and Europe.</p>
					<button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Check mileage</button>
				</div>

			</center>
		</div>
	</div>

	<?php

	$userid = $_SESSION['id'] ;
	include("conn.php");
	$sql = "SELECT * FROM flight where user_id = $userid";

	$result = mysqli_query($con, $sql);

	$count = mysqli_num_rows($result);
	?>
	<div class="col-md-4"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Pakito Miles</h4>
			</div>
			<div class="modal-body">
				<?php 	
					if ($count < 5) {
						echo "<h3> Not eligible for Pakito Miles! Low count of flights </h3>";
					}else{
						echo "<h3>You may now apply for our Pakito Miles! Visit us at our compnay. </h3>";
					}
				 ?>
				<center><p>Total number of flights: <?php echo "$count"; ?></p></center>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>


