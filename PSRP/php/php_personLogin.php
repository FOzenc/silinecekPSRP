
<?php
	if(isset($_POST["login"])) {
		$userName = $_POST["username"];
		$psw = $_POST["psw"];
		//$psw_repeat = $_POST["psw-repeat"];
		//echo $Information; 
		
		include("php_connectDB.php"); 
		
		
		try
		{
			$sSql = "SELECT * FROM `heroku_0a2b0dde984ddbf`.`person` WHERE sUsername='$userName' AND sPassword='$psw'; ";
			//$result=$conn->query("SELECT * FROM person WHERE sUsername='$userName' AND sPassword='$psw' ");
			
			$result = $conn->query($sSql);
			/*
			// Perform query
			if ($result = $conn -> query($sSql)) 
			{
			  echo "Returned rows are: " . $result -> num_rows;
			  // Free result set
			  $result -> free_result();
			}
			else
			{
				
				 echo "row dönmedi ";
			}
			//echo $sSql;
			//echo $result;
	
			//echo $result->num_rows;
			*/
			if($result->num_rows!=0){
				//Process Login
				$row=$result->fetch_assoc();
				
				//continue Processing
				$_SESSION["userName"]=$userName;
				
				echo "<script>
					
					window.location.href='../html/html_PersonMainPage.php';
					</script>";
			}else{
				//Invalid
				//echo "The Email or password you entered is incorrect";
				//echo '<script>alert("The username or password you entered is incorrect")</script>';
				echo "<script>
					alert('The username or password you entered is incorrect');
					window.location.href='../html/html_personLogin.php';
					</script>";
		}
		
		}
		catch(Exception $e)
		{
			 echo 'Message: ' .$e->getMessage(); 
			 echo "<script>
				alert('The username or password you entered is incorrect');
				window.location.href='../html/html_personLogin.php';
				</script>";
			
		}
		finally
		{
			
			$conn->close();
		}
		
		
	}

		
		
	
?>