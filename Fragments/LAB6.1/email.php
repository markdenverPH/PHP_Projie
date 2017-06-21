<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>LAB 6.1</title>

		<!-- Bootstrap -->
		<link href="bootstrap.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href="https://fonts.googleapis.com/css?family=Anton|Oswald|Fjalla+One" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="hey.css">
		<!--sweet alert-->
		<script src="dist/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	</head>
<body class="container-fluid">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="formdiv">
				<form method="post" action="sendmail.php" enctype="multipart/form-data">
					<center><span>SENDER</span></center>
					<label>Email Address:<br> markdenverbabaran@gmail.com </label><br>
					<label>Password *</label>
					<input class="form-control" type="password" name="pass" maxlength="80" placeholder="PASSWORD" required>
					<hr>
					<center><span>RECEIVER</span></center>
					<label>Subject *</label>
					<input type="text" class="form-control" name="form_subject" maxlength="50" size="30" placeholder="SUBJECT" required>
					<label>Email Address *</label>
					<input class="form-control" type="text" name="email" maxlength="80" placeholder="EMAIL ADDRESS" required>
					<label>Comments *</label>
					<textarea name="comments" maxlength="1000" cols="10" rows="6" class="form-control"></textarea>
					<label>Attachment *</label>
					<input type="file" name="att" required>
					<center>
						<input name="submit" class="btn btn-info" type="submit"></input>
					</center>
					
				</form>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	<?php
		if(isset($_POST['email'])){
			include 'sendmail.php';
		}
	?>
</body>
</html>

