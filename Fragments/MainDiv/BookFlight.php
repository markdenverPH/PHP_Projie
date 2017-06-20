<<<<<<< HEAD
<h1 class="pull-left BannMsg">Book a Flight</h1>
<br><br><br><br>
=======
<?php


if($_SESSION['is_logged'] == FALSE){
	header("Location: login.php");
}

?>
<h1 class="pull-left BannMsg">Book a Flight</h1><br><br><br><br>
>>>>>>> 8deb772500c24c2908c3669fae15d65a5724591a
<form action="MainDiv/BookFlight-Exec.php" method="post">
	<div class="row">

		<div class="col-md-4">

			<!--Origin Place -->
			<div id="divFrom" class="form-group select-style ">
				<label> Origin</label>
				<select style="width: 100%;" id="descFrom" name="descFromS">											<!-- name="descFromS"  -->
					<?php include'BookFlight-Destinations.php'; ?>
				</select>
			</div>
			<br><br>
			<!-- Date From -->
			<div class="form-group ">
				<label for="dtp_input2" class="control-label">Travel Date Start</label>

				<div class="input-group date form_date" data-date="" data-date-format="MM dd yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">

					<input id="dateFrom" class="form-control" size="16" type="text" value="" name="dateFrom" readonly>
					<!-- name="dateFrom"  -->
					<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
			</div>
			<br><br>
			<div class="form-group ">
				<label> Number of Passenger</label>
				<input class="form-control " type="number" placeholder="" min="1" max="10" name="noPass" required="">
				<!--name="noPass"  -->
			</div>
			<br><br>
			<div class="form-group select-style">
				<label> Cabin Class</label>
				<select name="cabinClass" required="">
				<option value="null">-- Select One --</option>												<!--name="cabinClass"  -->
				<option value="ECNMY">Economy Class</option>
				<option value="BSNS">Bussiness Class</option>
			</select>

			</div>

		</div>
		<div class="col-md-4">

			<!-- Destination To -->
			<div id="divTo" class="form-group select-style">
				<label> Destinaton</label>
				<select style="width: 100%;" id="descTo" name="descToS">                          							 <!--name="descToS"  -->
				<?php include'BookFlight-Destinations.php'; ?>
			</select>
			</div>
			<br><br>
			<!-- Date To -->
			<div class="form-group">
				<label for="dtp_input2" class=" control-label">Travel Date End</label>

				<div class="input-group date form_date" data-date="" data-date-format="MM dd yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">

					<input id="dateTo" class="form-control" size="16" type="text" value="" name="dateTo" readonly>
					<!--name="dateTo"  -->
					<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
			</div>
		</div>
<<<<<<< HEAD
=======
	</div>

	<div class="form-group" >

		<label for="dtp_input2" class=" control-label">Roundtrip</label>
		<label class="radio-inline">
			<input type="radio" value="Yes" name="isRoundtrip" checked >Yes
		</label>
		<label class="radio-inline">
			<input type="radio" value="No" name="isRoundtrip">No
		</label>
	</div>

>>>>>>> 8deb772500c24c2908c3669fae15d65a5724591a

		<div class="col-md-4">
			<center>
				<button type="button" name="checkFlight" id="checkBtn" style="width: 60%;  color: white" class="btn btn-info">Check Flight</button>
				<button type="submit" id="submitBtn" name="checkFlight" style="width: 60%;  color: white !important; display: none;" class="btn btn-success ">Checkout</button>
				<br><br>
				<button type="button" id="reset" style="width: 60%; color: white" class="btn btn-danger ">Clear</button>
			</center>
		</div>
	</div>
</form>
