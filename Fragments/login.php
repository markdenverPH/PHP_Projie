<?php

session_start();


if($_SESSION['is_logged'] == TRUE){
  header("Location: Landing.php");
}

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="../css/style_login.css" rel="stylesheet">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/Popupstyle.css" rel="stylesheet">
  <link href="../css/Popupreset.min.css" rel="stylesheet">
  <title>Login</title>
  <script type="text/javascript">

    $(function() {

      $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
      });
      $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
      });

    });


  </script>
</head>
<body style="background-color: #22205f;">

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">

            <div class="row">
              <div class="col-xs-2"></div>
              <div class="col-xs-8">
               <center>
                <img src="../assets/img/ic_logo.png" style="width: 100%;">
                <hr>
                <br>
              </center>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-1">
              <button type="button" class="button_login"> <a href="../Home.php" style="color: #fdb818; " class="HomeReturn">x</a></button>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6">
              <a href="#" class="active" id="login-form-link">Login</a>
            </div>
            <div class="col-xs-6">
              <a href="#" id="register-form-link">Register</a>
            </div>
          </div>
          <hr>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="" method="post" role="form" style="display: block;">
                <div class="form-group">
                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                </div>
                <div class="form-group text-center">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                      <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn ButtonLogin" value="Log In">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12">
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <?php

              if (isset($_POST['login-submit'])) {
                include("conn.php");
                $username = $_POST['username'];
                $password = $_POST['password'];
                $booleanLogin = false;
                $selectQRY = "SELECT * FROM passenger WHERE pass_email = '$username' AND pass_password = '$password';";

                $checkdAcc = mysqli_query($con,$selectQRY);
                While($row3 = mysqli_fetch_array($checkdAcc)){

                  $userid = $row3['PASS_ID'];

                  $_SESSION['id'] =  $userid;
                }

                if (mysqli_num_rows($checkdAcc) > 0) {
                  $booleanLogin = true;
                  $data = mysqli_fetch_assoc( $checkdAcc );
                }
                if ($checkdAcc) {
                  if($booleanLogin == true)  {
                    $_SESSION['is_logged'] = true;

                    echo '<script type="text/javascript">
                    window.location.href = "http://localhost/PHP_Projie/fragments/Landing.php"
                  </script>';
                }else{
                  echo "<script> alert('failed') </script>";

                }
              }


            }

            ?>

            <!-- ALERT -->
            <div class="cd-popup" role="alert">
              <div class="cd-popup-container">
                <p>Are you sure you want to delete this element?</p>
                <ul class="cd-buttons">
                  <li><a href="#0">Yes</a></li>
                  <li><a href="#0">No</a></li>
                </ul>
                <a href="#0" class="cd-popup-close img-replace">Close</a>
              </div> <!-- cd-popup-container -->
            </div>

            <form id="register-form" action="register.php" method="post" role="form" style="display: none;">
              <div class="form-group container-fluid">
                <div class="col-sm-4">

                  <label for="">FIRST NAME</label>
                  <input type="text" name="firstname" id="firstname" tabindex="1" class="form-control" placeholder="First Name" value="" required>
                </div>
                <div class="col-sm-4">

                  <label for="">MIDDLE NAME</label>
                  <input type="text" name="middlename" id="middlename" tabindex="1" class="form-control" placeholder="Middle Name" value="" required>
                </div>
                <div class="col-sm-4">

                  <label for="lastname">LAST NAME</label>
                  <input type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Last Name" value="" required>
                </div>
              </div>
              <div class="form-group container-fluid" >
                <div class="col-md-4">
                  <label for="age">AGE</label>
                  <select class="form-control" id="age" name="age">
                    <?php for ($i=18; $i < 200 ; $i++) { ?>
                    <option><?php echo "$i";  ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="age">GENDER</label>
                  <select class="form-control" id="gender" name="gender">
                    <option>MALE</option>
                    <option>FEMALE</option>
                  </select>
                </div>
              </div>
              <div class="form-group container-fluid">
                <div class="col-sm-12">

                  <label for="">EMAIL</label>
                  <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                </div>
              </div>
              <div class="form-group container-fluid">
                <div class="col-sm-12">

                  <label for="">ADDRESS</label>
                  <input type="address" name="address" id="address" tabindex="1" class="form-control" placeholder="Address" value="" required>
                </div>
              </div>
              <div class="form-group container-fluid">
                <div class="col-sm-10">

                  <label for="">PASSWORD</label> <label id="message"></label>
                  <input type="password" name="password_input" id="password_input" tabindex="2" class="form-control" placeholder="Password" required
                  pattern=".{8,}" title="8 characters minimum" onkeyup='check_pass()'>
                </div>
                <div class="col-sm-2">

                  <button type="button" class="button_login" id="showPass" style="margin-top: 70%;"> <p id="txtShow">Show</p></button>
                </div>
              </div>
              <div class="form-group container-fluid">
                <div class="col-sm-10">
                  <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required pattern=".{8,}" title="8 characters minimum" onkeyup='check_pass()'>
                </div>
                <div class="col-sm-2">

                  <button type="button" class="button_login" id="showPass_2" style="margin-top: 20%;"> <p id="txtShow_2">Show</p></button>
                </div>

              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn ButtonRegister" value="Register Now">
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>




<script>
  function check_pass() {
    if (document.getElementById('password_input').value ==
      document.getElementById('confirm-password').value) {
      document.getElementById('register-submit').disabled = false;
  } else {
    document.getElementById('register-submit').disabled = true;
  }
}
$('#password_input, #confirm-password').on('keyup', function () {
  if ($('#password_input').val() == $('#confirm-password').val()) {

    $('#message').html('Matching').css('color', 'green');
  } else
  $('#message').html('Not Matching').css('color', 'red');
});
document.getElementById("showPass").addEventListener("click", function(){
  var input =  document.getElementById("password_input");
  if (input.type == "password") {
    document.getElementById("txtShow").innerHTML = "Hide";
    input.type = "text";
  }else{
    document.getElementById("txtShow").innerHTML = "Show";
    input.type = "password";
  }

});
document.getElementById("showPass_2").addEventListener("click", function(){
  var input =  document.getElementById("confirm-password");
  if (input.type == "password") {
    document.getElementById("txtShow_2").innerHTML = "Hide";
    input.type = "text";
  }else{
    document.getElementById("txtShow_2").innerHTML = "Show";
    input.type = "password";
  }

});
</script>
</script>

<script src="../js/WebScript.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/Popupmain.js"></script>
<script src="../js/Popupmodernizr.min.js"></script></body>
</html>
