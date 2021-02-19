<?php
require_once 'sptr_mysqli_connect.php';
//This is not the best way to do this... Too Bad!
session_start();
if(isset($_GET["edit"])){
    $_SESSION["EditTeam"] = $_GET["edit"];
}

?>

<div id="AddTeam" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom w3-card-4">
    <header class="w3-container w3-indigo">
      <span onclick="document.getElementById('AddTeam').style.display='none'" class="w3-button w3-indigo w3-xlarge w3-display-topright">&times;</span>
      <h4>Enter new team details:</h4>
    </header>
    <form class="w3-container">
      <p><input class="w3-input" type="text" name = "EditName" required>
      <label>Team/School Name</label></p>
      <button class="w3-button w3-block w3-amber w3-section w3-padding" type="submit" name = "EditTeam">Confirm</button>
    </form>
  </div>
</div>

<?php
echo $_SESSION["EditTeam"];
if(isset($_GET["EditTeam"])){
  $NewName = $_GET["EditName"];
  echo $NewName;

  //Ask for ID to edit and pray it exists
  $NameOut = $_SESSION["EditTeam"];
  $sqlQuery = "SELECT teams.TeamID AS 'IDToDelete' FROM teams WHERE teams.tname = '{$NameOut}';";
  $QueryOut = mysqli_Query($connection, $sqlQuery);

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

  //This isn't particularly efficient...Too bad!
  $IDToEdit = (int)$Teams[0][0];

  echo $IDToEdit;

  //using the ID, make the magic mySQL query go brrrrrrrrr
  $sqlQueryEdt = "UPDATE teams SET teams.tname = '{$NewName}' WHERE teams.TeamID = '{$IDToEdit}';";
  $QueryCheck = mysqli_Query($connection, $sqlQueryEdt);

  if($QueryCheck === true){
    header("location: Starter2.php?edit=success");
  }

  else{
    header("location: Starter2.php?edit=failed");
  }
}
?>
