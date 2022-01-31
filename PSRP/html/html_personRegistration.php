<link rel="stylesheet" href="../css/registration.css">
<form action="../php/php_person_register.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Registration</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	<label for="surname"><b>Surname</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" required>
	<label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
	<label for="information"><b>Information(optional)</b></label>
    <input type="text" placeholder="Enter Information" name="Information" >

	<label for="name"><b>User Type</b></label>
	<select class="form-control" id="Usertype" name="UserType">
    <option>Author</option> 
    <option>Reader</option> 
	</select></p>
	
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	
	<!--
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
	 -->
	<!--
	<div class="row">
	   <div class="small-12 medium-2 large-2 columns">
		 <div class="circle">
		   <img class="profile-pic" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg">

		 </div>
		 <div class="p-image">
		   <i class="fa fa-camera upload-button"></i>
			<input class="file-upload" type="file" accept="image/*"/>
		 </div>
	  </div>
	</div>
	 -->
	<!-- 
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
 -->
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
		<!-- <button type="button" class="cancelbtn"><a href="personLogin.html">Cancel</button> -->
		<button type="button" onclick="document.location='html_personLogin.php'" class="cancelbtn">Cancel</button>
		<button type="submit" class="signupbtn" name = "signUp">Sign Up</button>
    </div>
  </div>
</form>

