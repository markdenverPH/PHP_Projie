<?php
     $airfare = 0;
     if(isset($_POST['checkout_out1'])){
          if(isset($_POST['orig1']) && isset($_POST['checkout_out1']) && $_POST['orig1']!="" && $_POST['orig1']!=16){
               $temp = $_POST['orig1'] - 16;
               if($temp <0){
                    $temp = $temp * -1;
               } else {
                    $temp * 2000;
               }
          } else {
               echo'
                    <script>
                         alert("Invalid ORIGIN");
                         history.go(-1)
                    </script>
               ';
               exit();
          }
     }
?>
<html>
<head>
     <link rel="stylesheet" href="../../css/bootstrap.css">
</head>

<body class="container-fluid" style="background-color:#22205f;">
     <br><br><br><br><br>
<?php
$title=$_POST['BP_title1'];
$pax=$_POST['BP_pax1'];
$days=$_POST['BP_days1'];
$airport=$_POST['BP_airport1'];
$location=$_POST['BP_location1'];
$trip=$_POST['BP_trip1'];
$pack=$_POST['BP_pack1'];
$sched=$_POST['BP_sched1'];
$price=$_POST['BP_price1'];


?>
     <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" style="border:2px solid #fdb818;border-radius:10px;background-color:white;">
               <br>
               <?php echo'<center><h2>'.$title.'</h2></center>'; ?>
               <?php echo'<center><h5>'.$location.'</h5></center>'; ?>
               <b>Details:</b>
               <div class="row">
                    <div class="col-md-6">
                         <?php echo'<p>'.$pax.'</p>'; ?>
                         <p><?php echo $days; ?></p>
                         <p>Destined Airport: <?php echo $airport; ?></p>
                    </div>
                    <div class="col-md-6">
                         <p>Trip type: <?php echo $trip; ?></p>
                         <p>Inclusion: <?php echo $pack; ?></p>
                         <p>Schedule: <?php echo $sched; ?></p>
                    </div>
               </div>
               <br>
               <p><b>Destination:</b> <?php echo $location; ?></p>
               <p><b>Price:</b> <?php echo $price; ?></p>
               <div class="form-group ">
                    <label>Payment:</label>
                    <input type="text" class="form-control" placeholder="PAYMENT" required>
                    <!--name="noPass"  -->
               </div>
               <div class="form-group" align="right">
                    <input type="submit" name="checkout_confirm" class="btn btn-primary" data-dismiss="modal" value="Checkout"></input>
               </div>
          </div>
          <div class="col-md-3"></div>
     </div>

</body>
</html>

<?php
function confirm_double($val){
     if(preg_match("/^\d+\.?\d*$/",$val) && $val>0 && $val<999999999){
          return true;
     } else
          return false;
}
?>
