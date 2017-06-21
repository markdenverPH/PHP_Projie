	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<?php 
// para sa user lang to, di pa tapos tangina

	include('conn.php');
	$user_id = $_SESSION['id'];
	$result3 = mysqli_query($con,"SELECT * FROM passenger WHERE PASS_ID='$user_id'");
if 	(mysqli_num_rows($result3) > 0 ) // this eliminate the 0 row problem
{

	?>
	<div class="container-fluid">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="text-align: center;">
			<h1 style="margin-top: 20%;"></h1>
			<?php 
			While($row3 = mysqli_fetch_array($result3)){
				$fname = $row3['PASS_FIRSTNAME'];
				$mname = $row3['PASS_MIDDLENAME'];
				$lname = $row3['PASS_LASTNAME'];
				$username = $row3['PASS_EMAIL'];
				$address = $row3['PASS_ADDRESS'];
				$gender = $row3['PASS_GENDER'];

				?>
				<center><img style="height: 150px; width: 150px;" class="img-circle" src = "<?php echo $row3['images_path']; ?>"></center>
				<h1><?php echo "$fname $mname $lname" ?></h1>
				<div class="row">





					<form action="saveimage.php" enctype="multipart/form-data" method="post">


						<label class="pull-left ">Email</label>
						<label class="pull-right"><?php echo "$username"; ?></label><br>
						<label class="pull-left">Address</label>
						<label class="pull-right"><?php echo "$address"; ?></label><br>
						<label class="pull-left">Gender</label>
						<label class="pull-right"><?php echo "$gender"; ?></label><br>
						<br>
						<input name="uploadedimage"  type="file" class="inputfile" >
						<br>
						
						<center>
							<input name="Upload Now" type="submit" value="Submit" class="btn btnm-success ">
						</center>

					</form>

				</div>

				<?php
			}
		}
		else{
			echo "error";
		}
		?>


	</div>
	<div class="col-md-4"></div>
</div>
