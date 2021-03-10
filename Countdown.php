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
		<a href="Stopwatch.php" class="w3-bar-item w3-button w3-padding w3-indigo"><i class="fa fa-clock-o fa-fw"></i>&nbsp; Scoring</a>
		<a href="Interim.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bars fa-fw"></i>&nbsp; Team Composition</a>
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
    <h5><b><i class="fa fa-clock-o"></i>   Scoring</b></h5>
  </header>
<!--START Actual Page Layout-->
<body>
	<div class="w3-bar w3-border w3-light-grey">
				<div class="w3-bar w3-border w3-amber">
					<a href="Stopwatch.php" class="w3-bar-item w3-button">Stopwatch</a>
					<a href="Countdown.php" class="w3-bar-item w3-button w3-indigo">Countdown</a>
			</div>
	</div>
	<div class="w3-container w3-border w3-center" style="margin:auto;margin-top:10px;width:500px;padding:75px;">
		<h3 id="timer"> Timer Here </h3> <!--Remove Padding^ for actual code!-->
	</div>
	<div class="w3-container w3-center">
	<button onclick="document.getElementById('Settings').style.display='block'" class="w3-button w3-xlarge w3-center"><i class="fa fa-cog"></i></button></a>
		
		<div id="Settings" class="w3-modal">
			<div class="w3-modal-content w3-animate-zoom w3-card-4"  style="width:300px;">
				<header class="w3-container w3-indigo">
					<span onclick="document.getElementById('Settings').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
					<h2>Set the time:</h2>
				</header>
				<div class="w3-margin">
					<form class="w3-container">
						<p id="seconds"><input class="w3-input" type="number" name="sec" min="1" max="60"required>
						<label>Seconds</label></p>
						<p id="minutes"><input class="w3-input" type="number" name="min" min="0" max="60">
						<label>Minutes</label></p>
						<p id="hours"><input class="w3-input" type="number" name="hours" min="0" max="250">
						<label>Hours</label></p>
						<button class="w3-button w3-block w3-amber w3-section w3-padding" type="submit">Set Time</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="w3-row" style="margin:auto;width:750px;margin-top:50px;">
		<div class="w3-container w3-third w3-border w3-center" style="margin:auto;padding:20px;">
			<h5 id="Display1">0</h5>
		</div>
		<div class="w3-container w3-third w3-center">
			<button onclick="stop()" class="w3-bar-item w3-button w3-xlarge"><i class="fa fa-stop"></i></button></a>
			<button onclick="reset()" class="w3-bar-item w3-button w3-xlarge"><i class="fa fa-pause"></i></button></a>
		</div>
		<div class="w3-container w3-third w3-border w3-center" style="margin:auto;padding:20px;">
			<h5 id="Display2">0</h5>
		</div>
	</div>
	<div class="w3-row" style="margin:auto;width:750px;margin-top:15px;">
		<div class="w3-row w3-container w3-third" style="margin:auto;padding:10px;">
			<div class="w3-third w3-center">
				<button onclick="subtract(1)" class="w3-button w3-hover-red w3-border w3-border-red w3-round-xxlarge"><h4>-</h4></button>
			</div>
			<div class="w3-third w3-center">
				<h6> Team 1 name </h6>
			</div>
			<div class="w3-third w3-center">
				<button onclick="add(1)" class="w3-button w3-hover-green w3-border w3-border-green w3-round-xxlarge"><h4>+</h4></button>
			</div>
		</div>
		<div class="w3-container w3-third w3-center" style="margin:auto;padding:10px;">
			<button onclick="#" class="w3-btn w3-hover-yellow w3-border w3-border-yellow w3-ripple w3-round-xxlarge"><h6>Submit Scores</h6></button>
		</div>
		<div class="w3-row w3-container w3-third" style="margin:auto;padding:10px;">
			<div class="w3-third w3-center">
				<button onclick="subtract(2)" class="w3-button w3-hover-red w3-border w3-border-red w3-round-xxlarge"><h4>-</h4></button>
			</div>
			<div class="w3-third w3-center">
				<h6> Team 2 name </h6>
			</div>
			<div class="w3-third w3-center">
				<button onclick="add(2)" class="w3-button w3-hover-green w3-border w3-border-green w3-round-xxlarge"><h4>+</h4></button>
			</div>
		</div>
	</div>
</body>
<!--END Actual Page Layout-->

</html>

<!-- End page content -->

<script>
var score1=0;
var score2=0;
function add(TeamNum){
	if (TeamNum == 1){
		score1=score1+1;
		document.getElementById("Display1").innerHTML = ": "+score1+" :";
	}
	if (TeamNum == 2){
		score2=score2+1;
		document.getElementById("Display2").innerHTML = ": "+score2+" :";
	}
}
function subtract(TeamNum){
	if (TeamNum == 1){
		if (score1 > 0){
			score1=score1-1;
			document.getElementById("Display1").innerHTML = ": "+score1+" :";
		}
	}
	if (TeamNum == 2){
		if (score2 > 0){
			score2=score2-1;
			document.getElementById("Display2").innerHTML = ": "+score2+" :";
		}
	}
}
const urldata = window.location.search;
const parseData = new URLSearchParams(urldata);
//This is lazy implementation... Too Bad!
if(parseData.get('sec')){
	// Get the current date to start from
	var countDownDate = new Date().getTime();
	//grab time sets from URL
	const urldata = window.location.search;
	const parseData = new URLSearchParams(urldata);
	const secs = parseInt(parseData.get('sec'));
	const mins = parseInt(parseData.get('min'));
	const hour = parseInt(parseData.get('hours'));
	//set increment depending on the user inputs
	var seconds = secs * 1000;
	var minutes = mins * 60000;
	var hours = hour * 3600000;
	//Add increment to current date
    if(!Number.isNaN(seconds)){
            countDownDate = countDownDate + seconds;
    }
    if(!Number.isNaN(minutes)){
            countDownDate = countDownDate + minutes;
    }
    if(!Number.isNaN(hours)){
            countDownDate = countDownDate + hours;
    }
	countDownDate = countDownDate + 2000; //to account for the timer lag
	// Update the count down every 1 second
	var x = setInterval(function() {
		console.log("called");
	  // Get today's date and time
	  var now = new Date().getTime();
	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;
	  // Time calculations for days, hours, minutes and seconds
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	  // Display the result in the element with id="timer"
	  document.getElementById("timer").innerHTML = hours + " : "
	  + minutes + " : " + seconds;
	  // If the count down is finished, write some text
	  if (distance < 0) {
	    clearInterval(x);
	    document.getElementById("timer").innerHTML = "Time's Up!";
	  }
	}, 1000);
	
	function stop() {
		clearInterval(x);
	} /* Stop */

	var seconds = 0;
	var minutes = 0; /* holds incrementing value */
	var hours = 0;

}
	function checkTime(i) {
		if (i < 10) {
			i = "0" + i;
		}
	return i;
	}

	function reset() {
	/*Reset*/
	seconds = 0;
	minutes = 0;
	hours = 0

	document.getElementById("seconds").innerHTML = "00";
	document.getElementById("minutes").innerHTML = "00";
	document.getElementById("hours").innerHTML = "00";
}
</script>

</body>
</html>