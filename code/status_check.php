<?php

require 'db.php';

$ref_num = $mysqli->escape_string($_POST['ref_no']);
     
// Check if entry with that reference number exists
$result = $mysqli->query("SELECT * FROM Lost_Items1 WHERE Rid='$ref_num'") or die($mysqli->error());

if ( $result->num_rows > 0 ) {

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

  <div class="container-fluid text-center">
  <h2>You have reported as Lost the following Item - </h2>                                          
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>Item</th>
        <th>Item Descpription</th>
        <th>Last Seen Location</th>
        <th>Date Item was Lost</th>
      </tr>
    </thead>
    <tbody>
            <?php    
    while($row = $result->fetch_assoc()) {
     	echo "<tr><td>".$row["SubCategory"]."</td><td>".$row["Item_desc"]."</td><td>".$row["Location"]."</td><td>".$row["Date"]."</td></tr>";
        $cat = $row["Category"];
        $sub_cat = $row["SubCategory"];
        $brand = $row["Brand"];
        $loc= $row["Location"];
     } 
?>
    </tbody>
        </table>
        </div>
       
     <?php
	    $result2 = $mysqli->query("SELECT * FROM Found_Items WHERE Category ='$cat' AND SubCategory = '$sub_cat'") or die($mysqli->error());
            
     ?>
      <div class="container-fluid text-center">
  <h2>From Our Database We Have Found the following Items - </h2>                                          
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Item Category</th>
        <th>Item Descprition</th>
        <th>Found Location</th>
        <th>Contact E-mail</th>
      </tr>
    </thead>
    <tbody>
        <?php
    while($row2 = $result2->fetch_assoc()) {
        if(($row2["Category"]=="Clothing")){
		if(($row2["Brand"]==$brand)&&($row2["SubCategory"]==$sub_cat)){
			echo "<tr><td>".$row2["Name"]."</td><td>".$row2["SubCategory"]."</td><td>".$row2["Item_desc"]."</td><td>".$row2["Locaton"]."</td><td>".$row2["Email"]."</td></tr>";
		}
	}
	elseif(($row2["Category"]=="Electronics")||($row2["Category"]=="Musical Instrument")||($row2["Category"]=="Sporting Goods")) {
		if(($row2["SubCategory"]==$sub_cat)&&($row2["Brand"]==$brand)){
			echo "<tr><td>".$row2["Name"]."</td><td>".$row2["SubCategory"]."</td><td>".$row2["Item_desc"]."</td><td>".$row2["Location"]."</td><td>".$row2["Email"]."</td></tr>";
		}	
	}
	elseif (($row2["Category"]=="Personal Accessories")||($row2["Category"]=="Literature")){
		 if(($row2["SubCategory"]==$sub_cat)){
                        echo "<tr><td>".$row2["Name"]."</td><td>".$row2["SubCategory"]."</td><td>".$row2["Item_desc"]."</td><td>".$row2["Location"]."</td><td>".$row2["Email"]."</td></tr>";
                } 
	}

	/*else{
        echo "<tr><td>".$row2["Name"]."</td><td>".$row2["Category"]."</td><td>".$row2["SubCategory"]."</td><td>".$row2["Email"]."</td></tr>";
	}*/
     } 
?>    
    </tbody>
        </table>
        </center>


  </div>
  
  <footer class="container-fluid bg-4 text-center">
  <h2>Indian Institute Of Technology Ropar, Nangal Road, Rupanagar, Punjab, INDIA 140001<br>Tel: +91-1881-227078 Fax:+91-1881-223395</h2>
  <p>
  Copyright © 2017, Indian Institute of Technology Ropar
  </p> 
</footer>

</body>
</html>

  </body>
</html>

<?php 

}
else { // Reference Number doesn't already exist in a database, proceed...
   // echo "Incorrect";
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
 <br>
 
</div>

<div class="form">
    <h1 style = "color:red;">Error !!!</h1>
    <p>
    Incorrect Reference Id
    </p>    
    <a href="target1.php"><button class="button button-block"/>Back to Home Page</button></a>
</div>
<footer class="container-fluid bg-4 text-center">
  <h2>Indian Institute Of Technology Ropar, Nangal Road, Rupanagar, Punjab, INDIA 140001<br>Tel: +91-1881-227078 Fax:+91-1881-223395</h2>
  <p>
  Copyright © 2017, Indian Institute of Technology Ropar
  </p>
</footer>

</body>
</html>
<?php 
}
?>
