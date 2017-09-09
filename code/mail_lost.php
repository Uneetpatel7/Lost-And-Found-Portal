<?php

$name = $_POST['name'];
$e_no = $_POST['entnum'];
$email = $_POST['email'];
$date = $_POST['date'];
$loc = $_POST['loc'];
$loc_descp = $_POST['loc_descp'];
$cat = $_POST['cat'];
$sub_cat = $_POST['sub_cat'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$item_descp = $_POST['item_descp'];
$color = $_POST['color'];
//$id = $name+$loc+$e_no+$email+$cat+$sub_cat+$brand+$item_descp+$color;
$id =/* substr(md5($id),0,16)*/base64_encode(openssl_random_pseudo_bytes(16));
$Rid = substr($id,0,16);
$username = "user0";
$password = "csl203lab";
$database = "lab";


mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die ("Unable to select database");

// Check if reference id already exists
//$query1 = "SELECT * FROM Lost_Items1 WHERE Rid='$Rid'";
//$result = mysql_query($query1);
/*
$result = $mysqli->query("SELECT * FROM Lost_Items1 WHERE Rid='$Rid'") or die($mysqli->error());
echo "123";
//echo  $result->num_rows;

if ( $result->num_rows > 0 ) {

    //$_SESSION['message'] = 'Samething cannot be reported twice by same entity!';
    header("location: error.php");

}
*/

	if($name != "") {
		$query = "INSERT INTO Lost_Items1 VALUES ('','$name', '$e_no', '$email', '$date', '$loc', '$loc_descp', '$cat', '$sub_cat', '$brand', '$model', '$item_descp', '$color', '$Rid')";
		mysql_query($query);
	}

mysql_close();

/*
$to = $email;
$subject = 'Lost and Found Portal - Confirmation';
$message = 'Hello '.$name.', 
Thank you for reporting a lost item on our portal.
Your Lost Id for future reference - 1234';

$headers = "From: Eeshaan Sharma < eeshaansharma@gmail.com>";

if(mail($to, $subject, $message, $headers)) {
    echo "Thank you !!";
}

else {
    echo "Something went wrong";
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style_login.css" />
  <title>Thank You</title>
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
  

  </style>
</head>
<body>
<div class="container-fluid text-center">
    <h1 style="color:#c9d53b;">Thank You!!<br>Your Lost ID for future reference is: <?php echo"$Rid"; ?>
</h1><br><br>    
    <a href="target1.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-hand-left"></span> Back To Home Page
        </a>
</div>
</body> 
</html>

