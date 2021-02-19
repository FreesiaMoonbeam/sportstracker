<div id="AddTeam" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-card-4">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('AddTeam').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
      <h4>Enter team or school name and number of members:</h4>
    </header>
    <form class="w3-container">
      <p><input class="w3-input" type="text" name = "TeamName" required>
      <label>Team/School Name</label></p>
      <p><input class="w3-input" type="text" name = "MemberCount" required>
      <label>Number of Members</label></p>
      <button onclick="sendQuery()"class="w3-button w3-block w3-amber w3-section w3-padding" type="submit" name = "NewTeam">Add Team</button>
    </form>
  </div>
</div>

<?php
  require_once 'sptr_mysqli_connect.php';

  function sendQuery(){
    $name = $_GET['TeamName'];
    $memCount = (int)$_GET['MemberCount'];
    $SQLquery = "INSERT INTO teams (tname, memCount) VALUES ($name, $memCount)";
    $QueryOut = mysqli_query($connection, $SQLquery);


    if($QueryOut === true){
      header("location: Starter2.php?add=success");
    }

    else{
      header("location: Starter2.php?add=failed");
    }
  }
?>
