<?php
$username="user0";
$password="csl203lab";
$database="lab";
$table_name="Users_Lost";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die("Unable to select database");

$query = "SELECT * FROM $table_name";
$result = mysql_query($query);
$num = mysql_num_rows($result);

mysql_close();
?>

<html>
        <head>
           <link rel="stylesheet" type="text/css" href="style_user.css" /> 
	<title>New User Registration </title>
         </head>
         <body>

	<div class= "form-style-6">
	<h1>Create an Account</h1>
	<form action= "newuser.php" method= "post">
	<input type= "text" name= "name" placeholder= "Name" />
	<input type= "text" name= "eno" placeholder= "Entry Number" />
	<input type= "email" name= "email" placeholder= "E-mail" />
	<input type= "password" name= "pass" placeholder= "Password" />
	<input type= "password" name= "conf_pass" placeholder= "Confirm Password" />
	<input type= "submit" value= "Register" />

	<a href= "http://10.1.1.19/~2015CSB1011/Lost/">
	<center>
	<button class= "button" style= "vertical-align:middle"><span>Go Back </span></button>
	<center>
	</a>

	</form>
	</div>

	</body>
</html>

<?php
$name=$_POST['name'];
$entry_no=$_POST['eno'];
$email=$_POST['email'];
$password=$_POST['pass'];
$cpassword=$_POST['conf_pass'];

$i = 0;

$flag = 0;
while($i < $num) {
    $reg_email =  mysql_result($result, $i, "Email");
    if($email == $reg_email) {
	echo "E-mail Id has already been registererd";
        $flag++;
        break;
    }
}

echo "flag = $flag";
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die ("Unable to select database");

if($flag == '0') {
	$query="INSERT INTO $table_name VALUES('','$name','$entry_no','$email','$password')";
        echo "User added Successfully !";
}

mysql_query($query);
mysql_close();

?>


