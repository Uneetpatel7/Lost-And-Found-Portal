
<?php

session_start();
?>

<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style_login.css" />
  <title>Lost And Found</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  body {
    background: url('blue.jpg');
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
  .bg-1 {
      background-color: #ff5733;
      color: #000000;
  }
 
  .bg-2{
    color:#fff;
    text-align:center;
    background-size:cover;
    background-position:center;
    padding-top:100px;
    padding-bottom:100px;
}

 
  .bg-3 {
      background-color: #ffffff;
      color: #555555;
  }
  .bg-4 {
      background-color: #296875;
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .container-head {
      padding-top: 0px;
      padding-bottom: 0px;
  }
   .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 3px;
      border-radius: 3px;
      margin-bottom: 3px ;
      font-size: 10px;
      letter-spacing: 3px;
  }
  .navbar-nav  li a:hover {
      color: #000000  !important;
  }
  </style>
</head>
<body>

 <div class="bg-2" style="background-image:url('Untitled-1.jpg');">
</div>
<br><br><br><br><br><br>
<div class="form">
    <h1 style="color:red;">Error !!!</h1>
    <p>
    <?php
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];   
    else:
        header( "location: login.php" );
    endif;
    ?>
    </p>    
    <a href="index.php"><button class="button button-block"/>Back to Login Page</button></a>
</div>
<br><br><br><br><br>
<footer class="container-fluid bg-4 text-center">
  <h2>Indian Institute Of Technology Ropar, Nangal Road, Rupanagar, Punjab, INDIA 140001<br>Tel: +91-1881-227078 Fax:+91-1881-223395</h2>
  <p>
  Copyright © 2017, Indian Institute of Technology Ropar
  </p>
</footer>

</body>
</html>
