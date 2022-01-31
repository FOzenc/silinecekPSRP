	<form action="" method="GET" name="">
	<table>
		<tr>
			<td><input type="text" name="k" value="<?php echo isset($_GET['k']) ? $_GET['k'] : ''; ?>" placeholder="search user" /></td>
			<td><input type="submit" name="" value="Search" /></td>
		</tr>
		</table>
    </form>
	<?php
		$k = isset($_GET['k']) ? $_GET['k'] : '';

		// create the base variables for building the search query
		$search_string = "SELECT * FROM `heroku_0a2b0dde984ddbf`.`person` WHERE ";
		$display_words = "";
							
		// format each of search keywords into the db query to be run
		$keywords = explode(' ', $k);			
		foreach ($keywords as $word){
			$search_string .= "sUsername LIKE '%".$word."%' OR ";
			$display_words .= $word.' ';
		}
		$search_string = substr($search_string, 0, strlen($search_string)-4);
		$display_words = substr($display_words, 0, strlen($display_words)-1);
		
		include("../php/php_connectDB.php"); 
		
		// display a message to the user to display the keywords
		//echo '<div class="right"><b><u>'.number_format($result->num_rows).'</u></b> results found</div>';
		//echo 'Your search for <i>"'.$display_words.'"</i><hr />';
		echo $search_string;
		$result = $conn->query($search_string);
		if($result->num_rows!=0){
			// display the header for the display table
			echo '<table class="search">';
			
			// loop though each of the results from the database and display them to the user
			while ($row = $result->fetch_assoc()){
				/*
				echo '<tr>
					<td><h3><a href="'.$row['url'].'">'.$row['sName'].' '.$row['sSurname'].'</a></h3></td>
				</tr>
				<tr>
					<td>'.$row['blurb'].'</td>
				</tr>
				<tr>
					<td><i>'.$row['url'].'</i></td>
				</tr>';
				*/
				echo '<tr>
					<td><h3><a href="">'.$row['sName'].' '.$row['sSurName'].'</a></h3></td>
				</tr>';
			}
			
			// end the display of the table
			echo '</table>';
		
		}


		
		else
			echo 'There were no results for your search. Try searching for something else.';
	?>