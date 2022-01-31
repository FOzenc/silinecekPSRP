
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

</head>
<body>

	
	
	<form action="../php/php_personLogin.php" method="post">

	
	<link rel="stylesheet" href="../css/login.css">
	  <div class="container">
		<label for="uname"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="username" required>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<button type="submit" name = "login" >Login</button>
		
	<!--     <label>
		  <input type="checkbox" checked="checked" name="remember"> Remember me
		</label> -->
		
		<label>
		<span class="signIn"><a href="html_personRegistration.php">Sign In</a></span>
		</label>
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
		<button type="button" class="cancelbtn">Cancel</button>
			
	  </div>
	</form>

</body>
</html>

