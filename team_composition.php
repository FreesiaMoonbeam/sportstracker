<?php
// This script performs an INSERT query to add a record to the users table.

// Check for form submission:

	$page_title = 'Team Composition';
	include ('includes/header_sidebar.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('includes/sptr_mysqli_connect.php'); // Connect to the db.
	
	$errors = array(); // Initialize an error array.
	
	// Check for a team name:
	if (empty($_POST['tc_name'])) {
		$errors[] = 'You need to enter a team name!';
	} else {
		$tcn = mysqli_real_escape_string($dbc, trim($_POST['tc_name']));
	}
	
	// Check for number of members:
	if (empty($_POST['tc_mb'])) {
		$errors[] = 'You need to state the number of members in the team!';
	} else {
		$tcmb = mysqli_real_escape_string($dbc, trim($_POST['tc_mb']));
	}

	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		
		// Make the query:
		$q = "INSERT INTO tc_table (tc_name, tc_mb) VALUES ('$tcn', '$tcmb')";
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>Team has now been registered. !</p><p><br /></p>';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1><p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.

mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>

	<div class="w3-container w3-amber">
		<h2>Team Information</h2>
		<button onclick="document.getElementById('AddTeam').style.display='block'" class="w3-button w3-indigo">Add Team</button>
		<button onclick="document.getElementById('RemoveTeam').style.display='block'" class="w3-button w3-indigo">Remove Team</button>
		<button onclick="document.getElementById('EditTeam').style.display='block'" class="w3-button w3-indigo">Edit Team</button>
		<button onclick="document.getElementById('ShowTeam').style.display='block'" class="w3-button w3-indigo">Show Team List</button>
		
		<!--Adding a Team to database-->
		<div id="AddTeam" class="w3-modal">
			<div class="w3-modal-content w3-animate-zoom w3-card-4">
				<header class="w3-container w3-indigo"> 
					<span onclick="document.getElementById('AddTeam').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
					<h4>Enter team or school name and number of members:</h4>
				</header>
				<form class="w3-container">
					<p><input class="w3-input" type="text" name="team_name" size="15" maxlength="100" value="<?php if (isset($_POST['tc_name'])) echo $_POST['tc_name']; ?>" />
					<label>Team/School Name</label></p>
					<p><input class="w3-input" type="text" name="team_members" size="15" maxlength="15" value="<?php if (isset($_POST['tc_mb'])) echo $_POST['tc_mb']; ?>" />
					<label>Number of Members</label></p>
					<button class="w3-button w3-block w3-amber w3-section w3-padding" type="submit">Add Team</button>
				</form>
			</div>
		</div>
		
		<!--Removing a Team from the database-->
		<div id="RemoveTeam" class="w3-modal">
			<div class="w3-modal-content w3-animate-zoom w3-card-4">
				<div class="w3-container">
					<header class="w3-container w3-indigo"> 
						<span onclick="document.getElementById('RemoveTeam').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
						<h4>Delete which team?</h4>
					</header>
					<p>
					<button class="w3-button w3-ripple w3-blue">Insert Team 1 Name Here</button>
					<button class="w3-button w3-ripple w3-yellow">Insert Team 1 Name Here</button>
					</p>
				</div>
			</div>
		</div>
		
		<!--Editing an Existing Team-->
		<div id="EditTeam" class="w3-modal">
			<div class="w3-modal-content w3-animate-zoom w3-card-4">
				<div class="w3-container">
					<header class="w3-container w3-indigo"> 
						<span onclick="document.getElementById('EditTeam').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
						<h4>Edit which team?</h4>
					</header>
					<p>
					<button class="w3-button w3-ripple w3-blue">Insert Team 1 Name Here</button>
					<button class="w3-button w3-ripple w3-yellow">Insert Team 1 Name Here</button>
					</p>
				</div>
			</div>
		</div>
		
		<div id="ShowTeam" class="w3-modal">
			<div class="w3-modal-content w3-animate-zoom w3-card-4">
				<div class="w3-container">
					<header class="w3-container w3-indigo"> 
						<span onclick="document.getElementById('EditTeam').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
						<h4>Team List</h4>
					</header>
					<?php
					require ('includes/sptr_mysqli_connect.php'); // Connect to the db.
					$sql_stmt = "SELECT * FROM tc_table";  //SQL select query 
    
					$result = mysqli_query($dbc,$sql_stmt);
	 
					$rows = mysqli_num_rows($result); //check if there are data in database
		
					if (!$result)   {
					die("Database access failed: " . mysqli_error()); 
					//output error message if query execution failed 
					}
		
					if ($rows) {     
					echo '<table style="width:50%">';
					echo '<tr>';
					echo '<th>Team Name</th>';
					echo '<th>Number of Members</th>';
					echo '<tr>';
 
					while ($row = mysqli_fetch_array($result)) {  //getting values thru mysql_fetch_array
	
					echo "<tr>";
					echo '<td>' . $row['tc_name'] . '</td>';         
					echo '<td>' . $row['tc_mb'] . '</td>';        
					echo "</tr>";
		 
					} 
					echo '</table>';
					}
					?>
		
				</div>
			</div>
		</div>

<?php include ('includes/footer.html'); ?>
