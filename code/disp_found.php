<?php

$username = "user0";
$password = "csl203lab";
$table_name = "Found_Items";

mysql_connect(localhost,$username,$password);
@mysql_select_db("lab") or die ("Unable to select database");

$query = "SELECT * FROM $table_name";
$result = mysql_query($query);
$num = mysql_num_rows($result);
mysql_close();

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
      padding-top: 30px;
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


  <div class="container-fluid text-center">
  <h2>List of Found Items Reported</h2>                                          
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




<footer class="container-fluid bg-4 text-center">
  <h2>Indian Institute Of Technology Ropar, Nangal Road, Rupanagar, Punjab, INDIA 140001<br>Tel: +91-1881-227078 Fax:+91-1881-223395</h2>
  <p>
  Copyright © 2017, Indian Institute of Technology Ropar
  </p> 
</footer>

</body>
</html>
