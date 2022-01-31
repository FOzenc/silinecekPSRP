<?php


try
{
	
	include("php_connectDB.php");
	$searchText = metaphone($_POST['search']);
	//echo $searchText;
	$sql = "SELECT * FROM `heroku_0a2b0dde984ddbf`.`person` WHERE sName like '%".$searchText."%' "  ;
	echo $sql;
	$result = $conn->query($sql); 
	foreach($result as $row){
		?>
		<p>
		<?php
		echo $row["sName"];
		?>
		</p>
		<?php
	}
		
}
catch(Exception $e)
{
	 echo 'Message: ' .$e->getMessage(); 
	
	
}
finally
{
	
	$conn->close();
}

?> 