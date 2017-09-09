<?php

$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];
/*
$pass = test_input($_POST['password']);
$passworderror = ""
$cuppercase = preg_match('@[A-Z]@', $pass);
				$clowercase = preg_match('@[a-z]@', $pass);
				$cnumber    = preg_match('@[0-9]@', $pass);

            if (!$cuppercase || !$clowercase || !$cnumber || strlen($pass) < 8) {
                $passworderror = "Password must : be minimum of 8 characters, contain at least 1 number, one uppercase character
and one lowercase character";
        }
function test_input($data)

{

	$data=trim($data);

	$data=addslashes($data);

	$data=htmlspecialchars($data);

	return $data;

}      
if (empty($passworderror))
{*/
$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
      
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else {
    $sql = "INSERT INTO users (first_name, last_name, email, password, hash) " 
            . "VALUES ('$first_name','$last_name','$email','$password', '$hash')";

    if ( $mysqli->query($sql) ){

        $_SESSION['logged_in'] = true; // So we know the user has logged in
        header("location: target1.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}

