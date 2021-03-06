<!DOCTYPE html>
<?php
	require_once 'includes/sptr_mysqli_connect.php';  // Connect to the db.
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require ('includes/sptr_mysqli_connect.php');
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

	exit();

} else { // Report the errors.
	echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) { // Print each error.
		echo " - $msg<br />\n";
	}
		echo '</p><p>Please try again.</p><p><br /></p>';
	} // End of if (empty($errors)) IF.

} // End of the main Submit conditional.
?>

<html>
<title>Team Composition</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th, td {
		padding: 15px;
		text-align: left;
	}
</style>

<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-indigo w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <span class="w3-bar-item w3-right">Pave the way to success.</span>
</div>

<!-- START Sidebar/menu DO NOT TOUCH-->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
	<div class="w3-container w3-row">
		<div class="w3-col s8 w3-bar">
			<h3><span>Welcome to <strong>ScoreTracker</strong></span></h3><br>
			<button onclick="window.location.reload();" class="w3-bar-item w3-button w3-xlarge"><i class="fa fa-refresh"></i></button></a>
		</div>
	</div>
	
	<hr>

	<div class="w3-container">
		<h5>Menu</h5>
	</div>

	<div class="w3-bar-block">
		<a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>
		<a href="overview.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>&nbsp; Overview</a>
		<a href="Stopwatch.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-clock-o fa-fw"></i>&nbsp; Scoring</a>
		<a href="Interim.php" class="w3-bar-item w3-button w3-padding w3-indigo"><i class="fa fa-bars fa-fw"></i>&nbsp; Team Composition</a>
		<a href="Results.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-trophy fa-fw"></i>&nbsp; Results</a>
	</div>
</nav>
<!-- END Sidebar/menu DO NOT TOUCH-->

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-bars"></i>   Team Composition</b></h5>
  </header>

<!--START Actual Page Layout-->
<body>
	<div class="w3-container w3-amber">
		<h2>Team Information</h2>
		<button onclick="document.getElementById('AddTeam').style.display='block'" class="w3-button w3-indigo">Add Team</button>
		<button onclick="document.getElementById('RemoveTeam').style.display='block'" class="w3-button w3-indigo">Remove Team</button>
		<button onclick="document.getElementById('EditTeam').style.display='block'" class="w3-button w3-indigo">Edit Team</button>

		<div id="AddTeam" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-card-4">
    <header class="w3-container w3-indigo">
      <span onclick="location.href='Interim.php'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
      <h4>Enter team name: </h4>
    </header>
    <form class="w3-container">
      <p><input class="w3-input" type="text" name = "TeamName" required>
      <label>Team/School Name</label></p>
      <button class="w3-button w3-block w3-amber w3-section w3-padding" type="submit" name = "NewTeam">Add Team</button>
    </form>
  </div>
</div>


<?php
  require_once 'includes/sptr_mysqli_connect.php';

  if(isset($_GET["NewTeam"])){
    $name = $_GET['TeamName'];

    $SQLquery = "INSERT INTO tc_table (tc_name) VALUES ('$name');";
    $QueryOut = mysqli_query($dbc, $SQLquery);

    
    if($QueryOut === true){
      header("location: Interim.php?add=success");
    }

    else{
      header("location: Interim.php?add=failed");
    }
  }
?>

		<!--Removing an Existing Team-->
		<div id="RemoveTeam" class="w3-modal">
			<div class="w3-modal-content w3-animate-zoom w3-card-4">
				<div class="w3-container">
					<header class="w3-container w3-indigo">
						<span onclick="document.getElementById('RemoveTeam').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
						<h4>Delete which team?</h4>
					</header>
					<p>

						<?php
		          $sqlHeader = ["Teams"];

				
		          $sqlQuery = "SELECT tc_table.tc_name AS 'name' FROM sportstracker_db.tc_table;";

		          $QueryOut = mysqli_Query($dbc, $sqlQuery);

		          if(mysqli_num_rows($QueryOut) > 0) {
		          #get tabulated rows as arrays
		          $entry = 0;
		            while($activerow = mysqli_fetch_array($QueryOut)){
		              #feed data to an array variable
		              foreach($activerow as $key => $incomingvalue){
		                //echo $incomingvalue;
		                $Teams[$entry][$key] = $incomingvalue;
		              }

		              $entry++;
		            }
		          }

		          #count data for table
		          $Cols = 1;
		          $Rows = mysqli_num_rows($QueryOut);
	          ?>

						<table border = "10" cellspacing = "30" cellpadding = "20">
            
            <?php
              echo "<tr>";
              #Print out row headers
              foreach ($sqlHeader as $out) {
                  echo "<td>";
                  echo $out;
              }

              for($row = 0; $row < $Rows; $row++){
                echo "<tr>";
                for($col = 0; $col < $Cols; $col++){
                  echo "<td>";
                  $NameOut = $Teams[$row][$col];
                  echo "<a href='deleteTeam.php?remove={$NameOut}'>$NameOut</a>";
                }
              }
            ?>
          </table>

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
					<!-- Convert to DB calls -->
          <?php

          $sqlHeader = ["Teams"];
          $sqlQuery = "SELECT tc_table.tc_name AS 'name' FROM sportstracker_db.tc_table;";

          $QueryOut = mysqli_Query($dbc, $sqlQuery);

          if(mysqli_num_rows($QueryOut) > 0) {
          #get tabulated rows as arrays
          $entry = 0;
            while($activerow = mysqli_fetch_array($QueryOut)){
              #feed data to an array variable
              foreach($activerow as $key => $incomingvalue){
                //echo $incomingvalue;
                $Teams[$entry][$key] = $incomingvalue;
              }

              $entry++;
            }
          }

          #count data for table
          $Cols = 1;
          $Rows = mysqli_num_rows($QueryOut);

          ?>

          <table border = "10" cellspacing = "30" cellpadding = "20">
            
            <?php
              echo "<tr>";
              #Print out row headers
              foreach ($sqlHeader as $out) {
                  echo "<td>";
                  echo $out;
              }

              for($row = 0; $row < $Rows; $row++){
                echo "<tr>";
                for($col = 0; $col < $Cols; $col++){
                  echo "<td>";
                  $NameOut = $Teams[$row][$col];
                  echo "<a href='EditTeam.php?edit={$NameOut}'>$NameOut</a>";
                }
              }
            ?>
          </table>
				</p>


					<?php

						//Check for previously accomplished procedures
					  if(isset($_GET["delete"])){
					    if($_GET["delete"] == "success"){
					      echo "<p>Team was successfully deleted</p>";
					    }

					    else if($_GET["delete"] == "failure"){
					      echo "<p>Team was not found or not properly deleted</p>";
					    }
					  }

						else if(isset($_GET["add"])){
					    if($_GET["add"] == "success"){
					      echo "<p>Team was successfully added</p>";
					    }

					    else if($_GET["add"] == "failure"){
					      echo "<p>Team was not added or connection to DB was compromised</p>";
					    }
  					}

						else if(isset($_GET["edit"])){
					    if($_GET["edit"] == "success"){
					      echo "<p>Team was successfully edited</p>";
					    }

					    else if($_GET["edit"] == "failure"){
					      echo "<p>Team was not edited or connection to DB was compromised</p>";
					    }
				  	}

						$sqlHeader = ["Teams"];
						$sqlQuery = "SELECT tc_table.tc_name AS 'name' FROM sportstracker_db.tc_table;";

						$QueryOut = mysqli_Query($dbc, $sqlQuery);

						if(mysqli_num_rows($QueryOut) > 0) {
							#get tabulated rows as arrays
							$entry = 0;

							while($activerow = mysqli_fetch_array($QueryOut)) {
								#feed data to an array variable
								foreach($activerow as $key => $incomingvalue){
								//echo $incomingvalue;
									$TeamProfile[$entry][$key] = $incomingvalue;
								}
								$entry++;
							}
						}
						#count data for table
						$Cols = 1;
						$Rows = mysqli_num_rows($QueryOut);

						#kill dbc to prevent data loss
					?>

					</p>
				</div>
			</div>
		</div>
		
	</div>
	<div style="margin-left:30px;margin-top:15px;">
		<h4>Current Registered Teams</h4>
		<p>
		<?php
		//Check for previously accomplished procedures
			if(isset($_GET["delete"])){
				if($_GET["delete"] == "success"){
					echo "<p>Team was successfully deleted</p>";
				}
				else if($_GET["delete"] == "failure"){
					echo "<p>Team was not found or not properly deleted</p>";
				}
			}

			$sqlHeader = ["Teams"];
			$sqlQuery = "SELECT tc_table.tc_name AS 'name' FROM sportstracker_db.tc_table;";

			$QueryOut = mysqli_Query($dbc, $sqlQuery);

			if(mysqli_num_rows($QueryOut) > 0) {
				#get tabulated rows as arrays
				$entry = 0;

				while($activerow = mysqli_fetch_array($QueryOut)) {
					#feed data to an array variable
					foreach($activerow as $key => $incomingvalue){
					//echo $incomingvalue;
						$TeamProfile[$entry][$key] = $incomingvalue;
					}
					$entry++;
				}
			}
			#count data for table
			$Cols = 1;
			$Rows = mysqli_num_rows($QueryOut);

			#kill dbc to prevent data loss

		?>

		<table>
		<?php
			echo "<tr>";
			#Print out row headers
			foreach ($sqlHeader as $out) {
				echo "<td>";
				echo $out;
			}

			for($row = 0; $row < $Rows; $row++){
				echo "<tr>";
				for($col = 0; $col < $Cols; $col++){
					echo "<td>";
					echo $TeamProfile[$row][$col];
				}
			}
			mysqli_close($dbc);
		?>
		</table>
		</p>
	</div>
</div>
</body>
<!--END Actual Page Layout-->


</html>

<!-- End page content -->

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>