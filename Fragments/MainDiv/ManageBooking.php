	<center><h1>My flights</h1></center>

	<?php

	$userid = $_SESSION['id'] ;
	include("conn.php");
	$sql = "SELECT * FROM flight where user_id = $userid";

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
					echo "	<tr class='info'>";
					echo "<td> $fl_id </td>";
					echo "<td> $fl_class </td>";
					echo "<td>". date("F j, Y ",$fl_departdate)."</td>";
					echo "<td>". date("F j, Y ",$fl_returndate)."</td>";
					echo "<td> $fl_from </td>";
					echo "<td> $fl_to </td>";
					echo "<td> $fl_passqty Persons </td>";
					echo "<td> $fl_flare </td>";
					echo "</tr>";
				}
			}
			?>
		</tbody>
	</table>
