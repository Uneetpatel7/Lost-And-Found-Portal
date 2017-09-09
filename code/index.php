<?php
require 'db.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in
        require 'login1.php';
    }
    
    elseif (isset($_POST['register'])) { //user registering
        require 'register.php';
    }
}

?>

<link rel="stylesheet" type="text/css" href="style_login.css" />
  <title>Lost And Found</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  body {
    background : url("blue.jpg");
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
  .bg-1 { 
      background-color: #;
      color: #ffffff;
      background-size:cover;
      background-position:center;
      padding-top:100px;
      padding-bottom:100px;
  }
  
  .bg-2{
    color:#fff;
    text-align:center;
    background-size:cover;
    background-position:center;
    padding-top:30px;
    padding-bottom:30px;
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
      font-size: 25px;
      letter-spacing: 7px;
  }
  .navbar-nav  li a:hover {
      color: #000000  !important;
  }
  </style>
</head>
<body>

<div class="bg-1" style="background-image:url('Untitled-1.jpg');">
 <br>
  
</div>

<div class="bg-2">
 <h1>Welcome To Official Lost And Found Portal Of IIT Ropar</h1>
    <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Welcome!</h1>
          
          <form action="login.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="login.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
	 <button class="button button-block" name="register" />REGISTER</button>
          
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</div> <!-- bg-2 -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
  $('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

    if (e.type === 'keyup') {
      if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
      if( $this.val() === '' ) {
        label.removeClass('active highlight'); 
      } else {
        label.removeClass('highlight');   
      }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
        label.removeClass('highlight'); 
      } 
      else if( $this.val() !== '' ) {
        label.addClass('highlight');
      }
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
  </script>





 
<footer class="container-fluid bg-4 text-center">
  <h2>Indian Institute Of Technology Ropar, Nangal Road, Rupanagar, Punjab, INDIA 140001<br>Tel: +91-1881-227078 Fax:+91-1881-223395</h2>
  <p>
  Copyright © 2017, Indian Institute of Technology Ropar
  </p> 
</footer>

</body>
</html>




