<?php

session_start();

$_SESSION['is_logged'] = FALSE;


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>
  <link href="css/stylesMain.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

  <div class="container-fluid Intro" >
    <center><img src="assets/img/PhilippinesMap.png" id="DivIntro"></center>
  </div>

  <div class="container-fluid IntroOver">

  </div>

  <div class="MessageDiv">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    
      <h3 class="IntroMessage">Over the counter booking is too mainstream</h3>
      <h3 class="IntroSubMessage"> Agree? Book a flight now, and enjoy our amazing tour package just for you!</h3>
      <center>
      <a href="Home.php" class="NoDes"><input type="button" name="get_started" value="Get Started" class="Button"></a>
      </center>
    </div>
    <div class="col-md-4"></div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/WebScript.js"></script>
</body>
</html>