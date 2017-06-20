
<h1 class="pull-left BannMsg">Book a Flight</h1><br><br><br><br>
<form action="" method="post">
	<div class="row">

		<div class="col-md-4">

			<!--Origin Place -->
			<div class="form-group select-style ">
				<label> Origin</label>
				<select style="width: 100%;" name="descFrom">											<!-- name="descFrom"  -->
					<?php include'BookFlight-Destinations.php'; ?>
				</select>
			</div>
			<br><br>
			<!-- Date From -->
			<div class="form-group ">
				<label for="dtp_input2" class=" control-label">Travel Date Start</label>

				<div class="input-group date form_date" 
				data-date="" data-date-format="MM dd yyyy" 
				data-link-field="dtp_input2" 
				data-link-format="yyyy-mm-dd">

				<input class="form-control" size="16" type="text" value="" name="dateFrom" readonly>        <!-- name="dateFrom"  -->
				<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			</div>
		</div>
		<br><br>
		<div class="form-group ">
			<label> Number of Passenger</label>
			<input class="form-control " type="number"  placeholder="" min="1" max="10" name="noPass">			<!--name="noPass"  -->
		</div>
		<br><br>
		<div class="form-group select-style">
			<label> Cabin Class</label>
			<select name="cabinClass">	
				<option value="null">-- Select One --</option>												<!--name="cabinClass"  -->
				<option value="ECNMY">Economy Class</option>
				<option value="BSNS">Bussiness Class</option>
			</select>																			

		</div>

	</div>
	<div class="col-md-4">

		<!-- Destination To -->
		<div class="form-group select-style">
			<label> Destinaton</label>
			<select style="width: 100%;" name="descTo">                          							 <!--name="descTo"  -->
				<?php include'BookFlight-Destinations.php'; ?>
			</select>
		</div>
		<br><br>
		<!-- Date To -->
		<div class="form-group">
			<label for="dtp_input2" class=" control-label">Travel Date End</label>

			<div class="input-group date form_date" 
			data-date="" data-date-format="MM dd yyyy" 
			data-link-field="dtp_input2" 
			data-link-format="yyyy-mm-dd">

			<input class="form-control" size="16" type="text" value="" name="dateTo" readonly>				<!--name="dateTo"  -->
			<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
	</div>


</div>
<div class="col-md-4">
	<center>	
		<button type="submit" style="width: 60%; background: #22205f; color: white" class="btn col-centered ">Check Flight</button>
		<br><br>
		<button type="button" id="reset" style="width: 60%; color: white" class="btn btn-danger ">Clear</button>
	</center>
</div>
</div>
</form>

<script type="text/javascript">
	
</script>

<?php 















