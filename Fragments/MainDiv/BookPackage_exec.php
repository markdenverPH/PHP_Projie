<?php

     function confirm_double($val){
          if(preg_match("/^\d+\.?\d*$/",$val) && $val>0 && $val<999999999){
               return true;
          } else
               return false;
     }

     if(isset($_POST['checkout_confirm'])){
          if($_POST['total'] <= $_POST['payment'] && confirm_double($_POST['payment'])){
               $class=$_POST['class'];
               if($class == "Economy"){
                    $class="ECNMY";
               } else {
                    $class="BSNS";
               }
               echo $class."<br>";
               echo $hold_date_from = $_POST['hold_date_from'];
               echo $hold_date_to = $_POST['hold_date_to'];
               echo $port_from = $_POST['port_from'];
               echo $port_to = $_POST['port_to'];
               echo $pax = $_POST['pax'];
               echo $total=$_POST['total'];
               session_start();
               include('conn.php');
               $query = "INSERT into flight(FL_CLASS, FL_DEPARTDATE, FL_RETURNDATE, FL_TO, FL_FROM, FL_PASSQTY, FL_FARE, user_id)
                              VALUES('".$class."', '".$hold_date_from."','".$hold_date_to."', '".$port_to."','".$port_from."','".$pax."','".$total."','".$_SESSION['id']."')";
               mysqli_query($con, $query) or die(mysqli_error($con));

               echo'
                    <script>
                         alert("Successful Reservation");
                    </script>
               ';
               header("location: ../Landing.php");
               exit();
          } else {
               echo'
                    <script>
                         alert("Invalid PAYMENT");
                         history.go(-1)
                    </script>
               ';
               exit();
          }
     } else {
          echo'
               <script>
                    alert("Invalid PAYMENT");
                    history.go(-1)
               </script>
          ';
          exit();
     }


?>
