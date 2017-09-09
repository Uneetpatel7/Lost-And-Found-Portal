<?php 

require 'db.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
  {
       require 'status_check.php';
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
      font-size: 1px;
      letter-spacing: 0px;
  }
  .navbar-nav  li a:hover {
      color: #000000  !important;
  }

  
  .form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 400px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}

.form-style-6 h1{
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}

.form-style-6 input[type="text"],
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}

.form-style-6 input[type="text"]:focus,
{
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
}


.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    margin-bottom:30px;
    background: #43D1AF;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;   
    color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: #2EBC99;
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
      
     <a href="target1.php" class="btn btn-default btn-lg">
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
	<li> <a href="https://docs.google.com/a/iitrpr.ac.in/forms/d/12gLWnOscRMrT80q-KkYJ5CssV8FUiNYlhUmDZ6Br-_I/prefill" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-alert"></span>REPORT_BUGS 
        </a></li>
        <li><a href="contact.php" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-earphone"></span>CONTACT US
        </a></li>
        <li><a href="logout.php" class="btn btn-primary btn-lg">
          <span class="glyphicon glyphicon-off"></span>LOGOUT 
        </a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">
        <div class="form-style-6">
        <h1>Enter Lost Item Reference Number</h1> <br> <br>
        <form action="status_check.php" method="post">
        <center>
    	<input type="text" name="ref_no" placeholder="Reference Number" />
        </center>
        <br><br> <br> <br>
        <input type="submit" value="SUBMIT" />
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
