<?php
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>


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
    color:#5555ff;
    text-align:center;
    font-size:4px;
    background-size:cover;
    background-position:center;
    padding-top:50px;
    padding-bottom:50px;
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
      padding-top: 30px;
      padding-bottom: 30px;
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
      font-size: 1px;
      letter-spacing: 0px;
  }
  .navbar-nav  li a:hover {
      color: #000000  !important;
  }
  </style>
</head>
<body>

<div class="bg-2" style="background-image:url('Untitled-1.jpg');">
 <br>
  
</div>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
     <a href="target.php" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-home"></span> HOME
  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="foundform.php" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-alert"></span>REPORT FOUND
        </a></li>
        <li> <a href="lostform.php" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-alert"></span>REPORT LOST 
        </a></li>
        <li> <a href="status.php" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-info-sign"></span>STATUS 
        </a></li>
	<li> <a href="https://docs.google.com/a/iitrpr.ac.in/forms/d/12gLWnOscRMrT80q-KkYJ5CssV8FUiNYlhUmDZ6Br-_I/edit?usp=sharing" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-alert"></span>REPORT_BUGS 
        </a></li>
        <li><a href="#" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-earphone"></span>CONTACT US
        </a></li>
        <li><a href="logout.php" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-off"></span>LOGOUT 
        </a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="bg-2">
 <h2>Welcome</h2>
 <h2><?php echo "$first_name $last_name"; ?></h2>
</div><!--bg-2-->    
 <div class="bg-3">
  <h2>List of Lost Items Reported</h2>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Item Lost</th>
        <th>Item Description</th>
        <th>Location</th>
        <th>Contact E-mail</th>
      </tr>
    </thead>
        <?php

        $i=0;

        $count=5;

        if($num < "5") {
            $count = $num;
        }

        while ($i < $count) {

        $name = mysql_result($result, $i, "Name");
        $e_no = mysql_result($result, $i, "EntryNumber");
        $email =  mysql_result($result, $i, "Email");
        $date =  mysql_result($result, $i, "Date");
        $loc =  mysql_result($result, $i, "Location");
        $loc_descp =  mysql_result($result, $i, "Location_desc");
        $cat =  mysql_result($result, $i, "Category");
        $sub_cat =  mysql_result($result, $i, "SubCategory");
        $brand =  mysql_result($result, $i, "Brand");
        $model =  mysql_result($result, $i, "Model");
        $item_descp =  mysql_result($result, $i, "Item_desc");
        $color =  mysql_result($result, $i, "Color");

        $i++;

    echo "    
    <tbody>
      <tr>
        <td>$i</td>
        <td>$name</td>
        <td><b> $sub_cat </b>, <b>Brand - </b> $brand, <b>Model - </b> $model <b>Color - </b> $color</td>
        <td>$item_descp</td>
        <td><b> $loc </b> <br> $loc_descp</td>
        <td>$email</td>
      </tr>
    </tbody>";
    }
  ?>
        </table>

  </div>




<div class="container-fluid bg-3 text-center">    
  <h1>Search Items</h1>
  <div class="row">
    <div class="col-sm-4">
      <h2>Lost Items Here</h2>
      <a href = "disp_lost.php">
      <img src="l.jpg" class="img-responsive img-circle center-block" width="220px" height="220px" alt="Image">
    </a>
    </div>
    <div class="col-sm-4"> 
      <h2><---|---></h2><br>
      <img src="laf.jpeg" class="img-responsive img-circle center-block" width="150px" height="150px" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <h2>Found Items Here</h2><br>
     <a href = "disp_found.php"> 
     <img src="f.jpg" class="img-responsive img-circle center-block" width="150px" height="150px" alt="Image">
    </a>
     </div>
  </div>
</div>




 
<footer class="container-fluid bg-4 text-center">
  <h2>Indian Institute Of Technology Ropar, Nangal Road, Rupanagar, Punjab, INDIA 140001<br>Tel: +91-1881-227078 Fax:+91-1881-223395</h2>
  <p>
  Copyright © 2017, Indian Institute of Technology Ropar
  </p> 
</footer>

</body>
</html>
