<?php
     $airfare = 0;
     $pass=$_POST['passenger'];
     function wrong(){
          echo'
               <script>
                    alert("Invalid ORIGIN");
                    history.go(-1)
               </script>
          ';
          exit();
     }
     if(isset($_POST['checkout_out1'])){
          if(isset($_POST['orig1']) && isset($_POST['checkout_out1']) && $_POST['orig1']!="" && $_POST['orig1']!=16){
               $temp = $_POST['orig1'] - 16;
               if($temp <0){
                    $temp = $temp * -1;
               }
               $airfare = $temp * 2000;
               $airfare = $airfare * $pass;
          } else {
               wrong();
          }
     }
     if(isset($_POST['checkout_out2'])){
          if(isset($_POST['orig1']) && isset($_POST['checkout_out2']) && $_POST['orig1']!="" && $_POST['orig1']!=12){
               $temp = $_POST['orig1'] - 12;
               if($temp <0){
                    $temp = $temp * -1;
               }
               $airfare = $temp * 2000;
               $airfare = $airfare * $pass;
          } else {
               wrong();
          }
     }
     if(isset($_POST['checkout_out3'])){
          if(isset($_POST['orig1']) && isset($_POST['checkout_out3']) && $_POST['orig1']!="" && $_POST['orig1']!=24){
               $temp = $_POST['orig1'] - 24;
               if($temp <0){
                    $temp = $temp * -1;
               }
               $airfare = $temp * 2000;
               $airfare = $airfare * $pass;
          } else {
               wrong();
          }
     }
?>
<html>
<head>
     <link rel="stylesheet" href="../../css/bootstrap.css">
</head>

<body class="container-fluid" style="background-color:#22205f;">
     <br><br><br>
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
                         <p><?php echo 'Good for '.$pax.' person'; ?></p>
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
               <div class="row">
                    <div class="col-md-6">
                         <p><b>Destination:</b> <?php echo $location; ?></p>
                         <p><b>Passengers:</b> <?php echo $pass; ?></p>
                         <p><b>Package Price:</b> <?php echo number_format(($price - ($price*0.12)), 2); ?></p>
                    </div>
                    <div class="col-md-6">
                         <p><b>Airfare:</b> <?php echo number_format($airfare - ($airfare*0.12), 2); ?></p>
                         <p><b>Tax:</b> <?php echo number_format(($price*0.12) + ($airfare*0.12), 2); ?></p>
                         <p><b>Total:</b> <?php echo number_format($airfare + $price,2); ?></p>
                    </div>
               </div>
               <form method="post" action="BookPackage_exec.php">
                    <?php
                         date_default_timezone_set("Asia/Manila");
                         // time() will return a unix timestamp
                         $hold_time = time(date("m/d/y h:i:s A",time()));
                    ?>
                    <input type="hidden" name="transac_date" value="<?php echo $hold_time; ?>"/>
                    <input type="hidden" name="total" value="<?php echo $airfare + $price; ?>"/>
                    <div class="form-group ">
                         <label>Payment:</label>
                         <input type="text" class="form-control" placeholder="PAYMENT" name ="payment"required>
                    </div>
                    <div class="form-group" align="right">
                         <input type="submit" name="checkout_confirm" class="btn btn-primary" data-dismiss="modal" value="Checkout"></input>
                    </div>
               </form>
          </div>
          <div class="col-md-3"></div>
     </div>

</body>
</html>
