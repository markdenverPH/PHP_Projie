	
<center><h1>Checkout

</h1></center>


<?php
	//include($_SERVER['DOCUMENT_ROOT']."/PHP_Projie/Fragments/MainLinks.html"); 
	//setlocale(LC_MONETARY, 'es_US');
$userid = $_SESSION['id'] ;
include("conn.php");
$sql = "SELECT * FROM flight where user_id = $userid";
$Total = 0;
$result = mysqli_query($con, $sql);

if ($result) {
	?>
	<table class="table">
		<thead>
			<tr>
				<th>Flight ID</th>
				<th>Flight Class</th>
				<th>Flight Departure Date</th>
				<th>Flight Return Date</th>
				<th>Flight From</th>
				<th>Flight To</th>
				<th>Flight No. of Passenger</th>
				<th>Flight Fare</th>
				<th>Remove Reservation</th>

			</tr>
		</thead>		
		<tbody>

			<?php
			While($row3 = mysqli_fetch_array($result)){


				$fl_id = $row3['FL_ID'];
				$fl_class = $row3['FL_CLASS'];
				$fl_departdate = $row3['FL_DEPARTDATE'];
				$fl_returndate = $row3['FL_RETURNDATE'];
				$fl_from = $row3['FL_FROM'];
				$fl_to = $row3['FL_TO'];
				$fl_passqty = $row3['FL_PASSQTY'];
				$fl_flare = $row3['FL_FARE'];
				$Total = $Total + $fl_flare;
				echo "	<tr class='info'>";
				echo "<td> $fl_id </td>";
				echo "<td> $fl_class </td>";
				echo "<td>". date("F j, Y ",$fl_departdate)."</td>"; 	
				echo "<td>". date("F j, Y ",$fl_returndate)."</td>";
				echo "<td> $fl_from </td>";
				echo "<td> $fl_to </td>";
				echo "<td> $fl_passqty Persons </td>";
				echo "<td> $fl_flare </td>";
				echo "<td>";
				echo'<a href=MainDiv/deleteReservation.php?id=' . $row3["FL_ID"] . ' style="color:red !important;" >' . 'Remove' . '</a>';
				echo  " </td>";

				echo "</tr>";
			}
			?>

			<h1 class="pull-right">Total: 
				<?php 
				$TotalCurr = number_format($Total, 0, '.', ',');
				echo "₱".$TotalCurr; 
				?> 
			</h1>
			<?php
		}
		?>
	</tbody>
</table>
<center>
	<button type="button" class="btn btn-success  alert">Pay in cash</button>
</center>

<script>
	$(document).on("click", ".alert", function(e) {
		bootbox.prompt({ 
			size: "small",
			title: "Payment", 
			callback: function(result){ 
			 //console.log(result);
			 var $total = <?php echo "$Total";  ?>;
			 if (result<$total) {
			 	alert('Insufficient payment');
			 }else{
			 	alert('Thank you!');
			 	 window.location.href = "MainDiv/deleteReservation.php?id=" + <?php echo $fl_id ; ?>; 
			 }

			}
		});
	});
</script>
