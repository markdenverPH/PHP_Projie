<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";//CHANGE THIS
$mysql_database = "pakitoairlines";//CHANGE THIS
$prefix = "";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password)
or die("Could not connect database");

// if (!$con)
// {
// Echo "Wow Mali";
// exit;
// }
mysqli_select_db( $con,$mysql_database) or die("Could not select database");

?>