<?php

     function confirm_double($val){
          if(preg_match("/^\d+\.?\d*$/",$val) && $val>0 && $val<999999999){
               return true;
          } else
               return false;
     }

     if(isset($_POST['checkout_confirm'])){
          if($_POST['total'] <= $_POST['payment'] && confirm_double($_POST['payment'])){
               session_start();
               include('conn.php');
               $query = "INSERT into transaction(transaction_date, transaction_type, user_id)
                              VALUES('".$_POST['transac_date']."', 'package','".$_SESSION['id']."')";
               mysqli_query($con, $query) or die("ERROR INSERTING VALUES");
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
