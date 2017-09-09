<body>
    <div>
    <img border="0" src="/Lost and Found/img/lost.png "  width=100% height="400" />

	</div>
	<div class="content">
	<center>
	  <h2>Welcome to official Lost and Found Portal of IIT Ropar</h2>
	  <br>
	  <img border="0" src="/Lost and Found/img/IIT_Ropar_Official_Logo.jpg "  width=40% height=60% />
	  <br> <br>
	  <h2>Please Login with your LDAP Credentials to continue</h2>
	</center>	
	</div>
	<div class="login">
	<h2>LOGIN</h2>
	<form name="login">
	<label for="username">Username:</label>
	<input type="text" id="username" name="username">
	<label for="password">Password:</label>
	<input type="password" id="password" name="password">
	<div id="lower">
	<input type="checkbox"><label for="checkbox">Keep me logged in</label>
	<input type="submit" value="Login" onclick="check(this.form)" value="Login">
	</div>
	</form>
	
	<script>
            function check(form) { /*function to check userid & password*/
                if(form.username.value == "user" && form.password.value == "password") {
                    /*location.replace("/Lost and Found/inc/target.php"); */
                    window.open('/Lost and Found/inc/target.php')/*opens the target page if Id & password matches*/
                	/*window.location.replace("/Lost and Found/inc/target.php");*/
                }
                else {
                    alert("Error!! Invalid Username or Password")/*error message*/
                }
            }
    </script>
	</div>
	