<?php
include("conn.php");



if (isset($_POST['register-submit'])) {
     $firstname = $_POST['firstname'];
     $middlename = $_POST['middlename'];
     $lastname = $_POST['lastname'];
     $age = $_POST['age'];
     $gender = $_POST['gender'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $password = $_POST['password_input'];
     $booleanInsert = true;

     $dupesql = "SELECT * FROM passenger where ( (pass_firstname ='$firstname' AND pass_middlename = '$middlename' AND pass_lastname = '$lastname') OR pass_email = '$email'   )";

     $checkdup = mysqli_query($con,$dupesql);

     if (mysqli_num_rows($checkdup) > 0) {
          $booleanInsert = false;
     }


     $query_upload="
     INSERT into passenger (pass_age,pass_address,pass_gender,pass_firstname,pass_middlename,pass_lastname,pass_email,pass_password)
     VALUES('".$age." ','".$address."',"."'".$gender."',"."'".$firstname."',"."'".$middlename."','".$lastname."',"."'".$email."',"."'".$password."')";

     if ($booleanInsert == true) {
          if (mysqli_query($con, $query_upload) or die("error in $query_upload == ----> ".mysqli_error($con))){
               echo "success";
          }else{
               echo "failes";
          }
     }else{
          echo "dup account";
     }
}
?>
