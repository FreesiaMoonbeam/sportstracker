<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
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
			<h2><span>Welcome to <strong>ScoreTracker</strong></span></h2><br>
			<button onclick="document.getElementById('Login').style.display='block'" class="w3-bar-item w3-button"><i class="fa fa-user"></i></button>
			<a href="#" class="w3-bar-item w3-button"><i class="fa fa-refresh"></i></a>

			<div id="Login" class="w3-modal">
				<div class="w3-modal-content w3-animate-top w3-card-4" style="max-width:600px">
					<header class="w3-container w3-indigo">
						<span onclick="document.getElementById('Login').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
						<h2>Enter your credentials:</h2>
					</header>

					<form class="w3-container w3-padding-16">
						<label><b> Username</b></label>
						<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
						<label><b> Password</b></label>
						<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
						<button class="w3-button w3-block w3-amber w3-section w3-padding" type="submit">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<hr>

	<div class="w3-container">
		<h5>Menu</h5>
	</div>

	<div class="w3-bar-block">
		<a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>
		<a href="Starter.html" class="w3-bar-item w3-button w3-padding w3-indigo"><i class="fa fa-users fa-fw"></i>&nbsp; Overview</a>
		<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-clock-o fa-fw"></i>&nbsp; Scoring</a>
		<a href="Starter2.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i>&nbsp; Team Composition</a>
		<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-trophy fa-fw"></i>&nbsp; Ranking</a>
		<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>&nbsp; Rulebook</a>
	</div>
</nav>
<!-- END Sidebar/menu DO NOT TOUCH--><!-- START Sidebar/menu DO NOT TOUCH-->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
	<div class="w3-container w3-row">
		<div class="w3-col s8 w3-bar">
			<h3><span>Welcome to <strong>ScoreTracker</strong></span></h3><br>
			<button onclick="document.getElementById('Login').style.display='block'" class="w3-bar-item w3-button w3-xlarge"><i class="fa fa-user"></i></button>
			<a href="#" class="w3-bar-item w3-button w3-xlarge"><i class="fa fa-refresh"></i></a>

			<div id="Login" class="w3-modal">
				<div class="w3-modal-content w3-animate-top w3-card-4" style="max-width:600px">
					<header class="w3-container w3-indigo">
						<span onclick="document.getElementById('Login').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
						<h2>Enter your credentials:</h2>
					</header>

					<form class="w3-container w3-padding-16">
						<label><b> Username</b></label>
						<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
						<label><b> Password</b></label>
						<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
						<button class="w3-button w3-block w3-amber w3-section w3-padding" type="submit">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="w3-container">
		<h5>Menu</h5>
	</div>

	<div class="w3-bar-block">
		<a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>
		<a href="Starter.html" class="w3-bar-item w3-button w3-padding w3-indigo"><i class="fa fa-users fa-fw"></i>&nbsp; Overview</a>
		<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-clock-o fa-fw"></i>&nbsp; Scoring</a>
		<a href="Starter2.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bars fa-fw"></i>&nbsp; Team Composition</a>
		<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-trophy fa-fw"></i>&nbsp; Ranking</a>
		<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>&nbsp; Rulebook</a>
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
					<span onclick="document.getElementById('AddTeam').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
					<h4>Enter team or school name and number of members:</h4>
				</header>
				<form class="w3-container">
					<p><input class="w3-input" type="text" required>
					<label>Team/School Name</label></p>
					<p><input class="w3-input" type="text" required>
					<label>Number of Members</label></p>
					<button class="w3-button w3-block w3-amber w3-section w3-padding" type="submit">Add Team</button>
				</form>
			</div>
		</div>

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
	</div>
</body>
<!--END Actual Page Layout-->

<!--PhP Code for the DB access-->
<?php
  require_once 'sptr_mysqli_connect.php';

  $sqlHeader = ["Teams"];
  $sqlQuery = "SELECT teams.tname AS 'name' FROM scoretracker.teams;";

  $QueryOut = mysqli_Query($connection, $sqlQuery);

  if(mysqli_num_rows($QueryOut) > 0) {
  #get tabulated rows as arrays
  $entry = 0;
    while($activerow = mysqli_fetch_array($QueryOut)){
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

  #kill connection to prevent data loss
  mysqli_close($connection);
?>

<!--make table look pretty pls-->
<table border = "10" cellspacing = "30" cellpadding = "20">
  <!--This is how data is displayed, please make this look fancy @Dearie-->
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
  ?>
</table>

</html>

<!-- Footer -->
	<footer class="w3-container w3-padding-16 w3-light-grey">
		<h4>END OF PAGE</h4>
		<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
	</footer>

<!-- End page content -->
</div>

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
