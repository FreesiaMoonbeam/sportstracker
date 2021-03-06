<!DOCTYPE html>

<html>
<title>Scoring Module</title>
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
		<a href="Interim.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bars fa-fw"></i>&nbsp; Team Composition</a>
		<a href="Results.php" class="w3-bar-item w3-button w3-padding w3-indigo"><i class="fa fa-trophy fa-fw"></i>&nbsp; Results</a>
	</div>
</nav>
<!-- END Sidebar/menu DO NOT TOUCH-->

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-trophy"></i>   Results</b></h5>
  </header>

<!--START Actual Page Layout-->
<body>
<div class="w3-container">
  <table class="w3-centered w3-table-all">
    <tr class="w3-indigo">
      <th><h4>Points</h4></th>
      <th><h4>Team 1</h4></th>
	  <th></th>
      <th><h4>Team 2</h4></th>
	  <th><h4>Points</h4></th>
    </tr>
    <tr>
      <td>30</td>
      <td class="w3-green">Winning Team</td>
      <td></td>
	  <td class="w3-red">Losing Team</td>
	  <td>21</td>
    </tr>
    <tr>
      <td>32</td>
      <td class="w3-red">Losing Team</td>
      <td></td>
	  <td class="w3-green">Winning Team</td>
	  <td>35</td>
    </tr>
    <tr>
      <td>29</td>
      <td class="w3-khaki">Tied</td>
      <td></td>
	  <td class="w3-khaki">Tied</td>
	  <td>29</td>
    </tr>
	<tr>
      <td>0</td>
      <td class="w3-brown">Winning Team</td>
      <td></td>
	  <td class="w3-brown">Losing Team</td>
	  <td>0</td>
    </tr>
  </table>
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