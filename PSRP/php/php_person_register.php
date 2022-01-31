
<?php
	if(isset($_POST["signUp"])) {
		$userName = $_POST["username"];
		$name = $_POST["name"];
		$surname = $_POST["surname"];
		$Information = $_POST["Information"];
		$UserType = $_POST["UserType"]; //string
		$email = $_POST["email"];
		$psw = $_POST["psw"];
		//$psw_repeat = $_POST["psw-repeat"];
		//echo $Information; 
		
		include("php_connectDB.php"); 
		
		
		
		$sql = "INSERT INTO `heroku_0a2b0dde984ddbf`.`person`
				(`sUsername`,`sName`,
				`sSurName`,`bUsertype`,
				`sEmail`,`sPassword`,`bUserStatus`,`sAbout`)
				VALUES ('$userName', '$name', '$surname',(select case when '$UserType' = 'Reader' then 0 else 1 end) ,'$email','$psw',0,'$Information')";
				/*
				$stmt = $mysqli->prepare($sql);
				$stmt->bind_param("ss", $userName, $name,$surname,$UserType,$email,$psw);
				$stmt->execute();
				*/
		//echo $sql;
		//$conn->close();
		
		if ($conn->query($sql) === TRUE) {
		  //echo "Successfully signed in";
		  //echo '<script>alert("Successfully signed in")</script>';
		  
		  try 
			{
			  //header("Location: ../html/html_personLogin.php");
			  
			  //die();
			  //echo 'If you see this, the number is 1 or below';
				echo "<script>
				alert('Successfully signed in');
				window.location.href='../html/html_personLogin.php';
				</script>";
			}
			//catch exception
			catch(Exception $e) {
				echo 'Message: ' .$e->getMessage();
			}
		  
		} else {
		  //echo "Error: " . $sql . "<br>" . $conn->error;
		  echo '<script>alert("The Email or password you entered is incorrect")</script>';
		}

		$conn->close();
		
	}
?>