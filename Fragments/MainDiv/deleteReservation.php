<?php 
include('conn.php');
$id=$_GET['id'];
$sql = "UPDATE flight SET user_id = '0' WHERE FL_ID = $id";
$result = mysqli_query($con, $sql);
if ($result) {
	header("Location: ../Landing.php");
}


?>